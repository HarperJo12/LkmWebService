<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class P_Perpindahan extends Model
{
    protected $table='p_perpindahan';
    protected $primaryKey='No_Trans';
    protected $fillable=['No_Trans','Kls_Awal','Kls_Akhir','Jjg_Awal','Jjg_Akhir','Jrs_Awal','Jrs_Akhir',
    'Bdg_Awal','Bdg_Akhir','Tahun_Sem','Keterangan','Lampiran1','Lampiran2'];

    public function tiket(){
        return $this->belongsTo('App\Tiket', 'No_Trans');
    }
}
