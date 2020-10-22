<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class Customer_Service extends Model
{
    protected $table='customer_service';
    protected $primaryKey='NIK';
    protected $fillable=['NIK','Nama_Lkp'];

    public function tiket(){
        return $this->hasMany('App\tiket','NIK_Cs');
    }

    public function user(){
        return $this->belongsTo('App\user','NIK');
    }
}
