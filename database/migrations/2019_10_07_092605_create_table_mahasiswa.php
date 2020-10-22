<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableMahasiswa extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('mahasiswa', function (Blueprint $table) {
            $table->string('NPM')->primary('NPM');
            $table->string('Nama_Lkp');
            $table->date('Tgl_Lahir');
            $table->string('Password');
            $table->integer('Stat')->nullable();
            $table->float('Ipk')->nullable();
            $table->integer('Sks_Lulus')->nullable();
            $table->string('Dos1')->nullable();
            $table->string('Dos2')->nullable();
            $table->string('Kelas');
            $table->string('Jenjang');
            $table->string('Jurusan');
            $table->string('Bidang');
            $table->timestamps();

            $table->foreign('NPM')
                ->references('username')->on('user')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });

        Schema::table('tiket', function (Blueprint $table){
            $table->foreign('NPM')
                ->references('NPM')->on('mahasiswa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('mahasiswa', function (Blueprint $table){
            $table->dropForeign('mahasiswa_npm_foreign');
        });
        Schema::table('tiket', function (Blueprint $table){
            $table->dropForeign('tiket_npm_foreign');
        });
        Schema::dropIfExists('mahasiswa');
    }
}
