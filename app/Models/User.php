<?php

namespace App\Models;

use App\Models\General\Profile;
use App\Models\Pivot\ClientUser;
use App\Models\Pivot\OperatorUser;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

use Laravel\Sanctum\HasApiTokens;
use Tymon\JWTAuth\Contracts\JWTSubject;

use Bavix\Wallet\Traits\HasWallet;
use Bavix\Wallet\Traits\HasWallets;
use Bavix\Wallet\Interfaces\Wallet;
use Bavix\Wallet\Traits\HasWalletFloat;
use Bavix\Wallet\Interfaces\WalletFloat;

class User extends Authenticatable implements Wallet, WalletFloat, JWTSubject
{
    use HasApiTokens, HasFactory, Notifiable, HasWallet,  HasWallets, HasWalletFloat;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function client()    {    return $this->hasOne(ClientUser::class);       }
    
    public function operator()  {    return $this->hasOne(OperatorUser::class);     }
    
    public function profile()    {   return $this->belongsTo(Profile::class);       }

    public static function GetUserLogin($data)
    {
        try {
            $user   =   User::where('username', $data->username)->firstOrFail();
            $pass   =   Hash::check($data->password, $user->password, []);
            return  $user->profile->id;

        } catch (\Exception $e) {
                return false;
        }
    }

}
