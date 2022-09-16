<?php

namespace App\Models\PaymentMethod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CreditCardKey extends Model
{
    use HasFactory;

    public function key() {   return $this->hasOne(CreditCardKey::class);    }

    public static function Register($data, $key)
    {
        $key            =   new CreditCardKey();
        $key->cypher    =   $data['cypher'];
        return  ( $key->save() ) ? $key->id : false;
    }
}
