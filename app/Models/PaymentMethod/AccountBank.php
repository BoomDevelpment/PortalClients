<?php

namespace App\Models\PaymentMethod;

use App\Helpers\DataCypher;
use App\Models\General\Bank;
use App\Models\General\Status;
use App\Models\Profile\Client;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBank extends Model
{
    use HasFactory;

    public function     bank()      {   return $this->belongsTo(Bank::class);               }

    public function     key()       {   return $this->belongsTo(AccountBankKey::class);     }
    
    public function     status()    {   return $this->belongsTo(Status::class);             }

    public function     type()      {   return $this->belongsTo(AccountBankType::class);    }

    public function     entity()    {   return $this->belongsTo(AccountBankEntity::class);  }

    public function     client()    {   return $this->belongsTo(Client::class);             }

    public static function RegisterData($data)
    {

        $kCy    =   bin2hex(random_bytes(16));
        $key    =   bin2hex(random_bytes(16));
        
        $cy     =   new DataCypher($key);

        $new                =   new AccountBank();
        $new->name          =   strtoupper($data['name']);
        $new->last          =   strtoupper($data['last']);
        $new->cypher        =   $cy->CypherData(json_encode($data['cypher']), $kCy)['cypher'];
        $new->keygen        =   $key;
        $new->key_id        =   AccountBankKey::Register($cy->CypherData(json_encode($kCy), $key), $key);
        $new->type_id       =   strtoupper($data['type_id']);
        $new->entity_id     =   strtoupper($data['entity_id']);
        $new->bank_id       =   strtoupper($data['bank_id']);
        $new->status_id     =   strtoupper($data['status_id']);
        $new->clients_id    =   strtoupper($data['clients_id']);
        
        return  ( $new->save() ) ? true : false;

    }

    public static function GetData($data)
    {
        $iAB    =   false;

        foreach ($data as $d => $da) 
        {
            $cy     =   new DataCypher($da->keygen);
            $keygen =   $cy->UnCypher(json_encode(AccountBankKey::find($da->key->id)->cypher), $da->keygen);
            $card   =   $cy->UnCypher(json_encode($da->cypher), $keygen);
   
            $iAB[$d] =   [
                'name'      =>  $card['name'],
                'account'   =>  $card['account'],
                'last'      =>  $da->last,
                'entity'    =>  $da->entity->name,
                'type'      =>  $da->type->name,
                'status'    =>  $da->status->name,
                'bank'      =>  $da->bank->name
            ];   
        }

        return $iAB;
    }
}
