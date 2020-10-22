<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class K_Jurusan extends Model
{
    protected $table='k_jurusan';
    protected $primaryKey='Id';
    protected $fillable=['Kd_Jurusan','NIK'];
}
