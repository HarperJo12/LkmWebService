<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * @Author Marcel 2019 *
 **/

class Jadkul_Dummy extends Model
{
    protected $table='jadkuldummy';
    protected $primaryKey='Id';
    protected $fillable=['kodemk','namamatkul','kelas','hari','mulai','selesai','npm'];
}
