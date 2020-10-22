<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class P_Matkul_Det extends Model
{
    protected $table='p_matkul_det';
    protected $primaryKey='Id';
    protected $fillable=['Kode_Mk','Nama_Mk','Tgl_Kuliah','Jam','Kelas','Stat','No_Trans'];

    public function pizin(){
        return $this->belongsTo('App/Tiket','No_Trans');
    }
}
