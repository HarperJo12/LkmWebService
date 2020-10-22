<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class Dosen extends Model
{
    protected $table='dosen';
    protected $primaryKey='NIK';
    protected $fillable=['NIK','Nama_Lkp'];

    public function tiket(){
        return $this->hasMany('App\tiket','NIK_Dosen');
    }

    public function user(){
        return $this->belongsTo('App\user','NIK');
    }
}
