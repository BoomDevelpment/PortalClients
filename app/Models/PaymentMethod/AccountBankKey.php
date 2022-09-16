<?php

namespace App\Models\PaymentMethod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBankKey extends Model
{
    use HasFactory;

    public function key() {   return $this->hasOne(AccountBankKey::class);    }

    public static function Register($data, $key)
    {
        $key            =   new AccountBankKey();
        $key->cypher    =   $data['cypher'];
        return  ( $key->save() ) ? $key->id : false;
    }
}
