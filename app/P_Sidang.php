<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class P_Sidang extends Model
{
    protected $table='p_sidang';
    protected $primaryKey='No_Trans';
    protected $fillable=['No_Trans','Ttl','Alamat','Kd_Pos','No_Telp','No_HP',
    'Email','Jenjang','Jurusan','Bidang','Judul_TA','Nama_Prs','Alamat_Prs','Pembimbing','Ko_Pembimbing','Tahun_Sem',
    'Lmp_Kwitansi'];

    public function tiket(){
        return $this->belongsTo('App\Tiket', 'No_Trans');
    }
}
