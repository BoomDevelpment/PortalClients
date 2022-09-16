<?php

namespace App\Models\Profile;

use App\Models\General\Gender;
use App\Models\General\Profile;
use App\Models\General\Status;
use App\Models\PaymentMethod\AccountBank;
use App\Models\PaymentMethod\CreditCard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public function client()    {   return $this->hasOne(Client::class);       }

    public function gender()    {   return $this->belongsTo(Gender::class);     }

    public function cards()     {   return $this->hasMany(CreditCard::class);   }

    public function abs()       {   return $this->hasMany(AccountBank::class);  }
    
    public function profile()   {   return $this->hasMany(Profile::class);     }
    
    public function status()    {   return $this->belongsTo(Status::class);     }
}
