<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class P_Izin extends Model
{
    protected $table='p_izin';
    protected $primaryKey='No_Trans';
    protected $fillable=['No_Trans','Jenis','Lampiran','Tgl_Awal','Tgl_Akhir','Keterangan'];

    public function tiket(){
        return $this->belongsTo('App\Tiket', 'No_Trans');
    }
}
