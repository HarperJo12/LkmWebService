<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableKJurusan extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('k_jurusan', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Kd_Jurusan');
            $table->string('NIK');
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
        Schema::dropIfExists('k_jurusan');
    }
}
