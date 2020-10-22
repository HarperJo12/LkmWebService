<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class Tiket extends Model
{
    //
    protected $table='tiket';
    protected $primaryKey='No_Tiket';
    protected $fillable=['Tgl_Transaksi','Jenis_Tiket','Stat','Kelas','NPM', 'NIK_Cs', 'NIK_Dosen'];

    public function pizin(){
        return $this->hasOne('App\p_izin','No_Trans');
    }

    public function pujian(){
        return $this->hasOne('App\p_ujian','No_Trans');
    }

    public function pperpindahan(){
        return $this->hasOne('App\p_perpindahan','No_Trans');
    }

    public function psidang(){
        return $this->hasOne('App\p_sidang','No_Trans');
    }

    public function pmatkuldet(){
        return $this->hasMany('App\P_Matkul_Det', 'No_Trans')->select(['Id','Kode_Mk', 'Nama_Mk', 'Tgl_Kuliah', 'Jam', 'Kelas', 'Stat', 'No_Trans']);
    }

    public function mahasiswa(){
        return $this->belongsTo('App\mahasiswa','NPM');
    }

    public function dosen(){
        return $this->belongsTo('App\dosen','NIK_Dosen');
    }

    public function cs(){
        return $this->belongsTo('App\customer_service','NIK_Cs');
    }
}
