<?php

namespace App\Models\PaymentMethod;

use App\Helpers\DataCypher;
use App\Models\General\Status;
use App\Models\Profile\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCard extends Model
{
    use HasFactory;

    public function     key()       {   return $this->belongsTo(CreditCardKey::class);      }
    
    public function     status()    {   return $this->belongsTo(Status::class);             }

    public function     type()      {   return $this->belongsTo(CreditCardType::class);     }

    public function     entity()    {   return $this->belongsTo(CreditCardEntity::class);   }
    
    public function     client()    {   return $this->belongsTo(Client::class);            }

    public static function RegisterData($data)
    {
        $status             =   false;

        $kCy    =   bin2hex(random_bytes(16));
        $key    =   bin2hex(random_bytes(16));
        
        $cy     =   new DataCypher($key);

        $new    =   new CreditCard();
        $new->name          =   strtoupper($data['name']);
        $new->last          =   strtoupper($data['last']);
        $new->month         =   strtoupper($data['month']);
        $new->year          =   strtoupper($data['year']);
        $new->cvv           =   strtoupper($data['cvv']);
        $new->cypher        =   $cy->CypherData(json_encode($data['cypher']), $kCy)['cypher'];
        $new->keygen        =   $key;
        $new->key_id        =   CreditCardKey::Register($cy->CypherData(json_encode($kCy), $key), $key);
        $new->type_id       =   strtoupper($data['type_id']);
        $new->entity_id     =   strtoupper($data['entity_id']);
        $new->status_id     =   strtoupper($data['status_id']);
        $new->clients_id    =   strtoupper($data['client_id']);
        
        try {
            $new->save();
            $status =   true;
        } catch (\Throwable $th) {
            $status =   false;
        }
        
        return  $status;

    }

    public static function GetData($data)
    {
        $iCards     =   false;

        if($data->count() <> 0)
        {
            foreach ($data as $d => $da) 
            {
                $cy     =   new DataCypher($da->keygen);
                $keygen =   $cy->UnCypher(json_encode(CreditCardKey::find($da->key->id)->cypher), $da->keygen);
                $card   =   $cy->UnCypher(json_encode($da->cypher), $keygen);
    
                $iCards[$d] =   [
                    'name'      =>  $card['name'],
                    'card'      =>  $card['card'],
                    'last'      =>  $da->last,
                    'month'     =>  $card['month'],
                    'year'      =>  $card['year'],
                    'entity'    =>  $da->entity->name,
                    'type'      =>  $da->type->name,
                    'status'    =>  $da->status->name,
                ];    
            }
        }

        return $iCards;
    }
}
