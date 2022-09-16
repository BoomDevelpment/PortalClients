<?php

namespace App\Models\PaymentMethod;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountBankEntity extends Model
{
    use HasFactory;

    public function entity() {   return $this->hasOne(AccountBankEntity::class);    }
}
