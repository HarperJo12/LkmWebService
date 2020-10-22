<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableTiket extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('tiket', function (Blueprint $table) {
            $table->Increments('No_Tiket');
            $table->date('Tgl_Transaksi');
            $table->integer('Jenis_Tiket');
            $table->integer('Stat');
            $table->integer('Kelas');
            $table->string('NPM');
            $table->string('NIK_Cs')->nullable();
            $table->string('NIK_Dosen')->nullable();
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
        Schema::dropIfExists('tiket');
    }
}
