<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableJadkuldummy extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('jadkuldummy', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('kodemk');
            $table->string('namamatkul');
            $table->string('kelas');
            $table->integer('hari');
            $table->time('mulai');
            $table->time('selesai');
            $table->string('npm');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jadkuldummy');
    }
}
