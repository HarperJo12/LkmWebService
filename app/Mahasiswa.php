<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table='mahasiswa';
    protected $primaryKey='NPM';
    protected $fillable=['NPM','Nama_Lkp','Tgl_Lahir', 'Password', 'Stat', 'Ipk', 'Sks_Lulus', 'Dos1', 'Dos2', 'Kelas','Jenjang','Jurusan', 'Bidang'];

    public function tiket(){
        return $this->hasMany('App\tiket','NPM');
    }

    public function user(){
        return $this->belongsTo('App\user','NPM');
    }
}
