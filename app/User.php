<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

/**
 * @Author Marcel 2019 *
 **/

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    protected $table='user';
    protected $primaryKey='username';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'password', 'level'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function mahasiswa(){
        return $this->hasOne()('App\mahasiswa','NPM');
    }

    public function dosen(){
        return $this->hasOne()('App\dosen','NIK');
    }

    public function cs(){
        return $this->hasOne()('App\customer_service','NIK');
    }
}
