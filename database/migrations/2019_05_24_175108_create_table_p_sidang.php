<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePSidang extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('p_sidang', function (Blueprint $table) {
            $table->integer('No_Trans')->unsigned()->primary('No_Trans');
            $table->string('Ttl',100);
            $table->string('Alamat',300);
            $table->string('Kd_Pos',10);
            $table->string('No_Telp',20)->nullable();
            $table->string('No_HP',20);
            $table->string('Email',100);
            $table->string('Jenjang',100);
            $table->string('Jurusan',100);
            $table->string('Bidang',100);
            $table->string('Judul_TA',300);
            $table->string('Nama_Prs',300)->nullable();
            $table->string('Alamat_Prs',500)->nullable();
            $table->string('Pembimbing',100);
            $table->string('Ko_Pembimbing',100)->nullable();
            $table->string('Tahun_Sem',50);
            $table->string('Lmp_Kwitansi')->nullable();
            $table->timestamps();

            $table->foreign('No_Trans')
                 ->references('No_Tiket')->on('Tiket')
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
        Schema::table('p_sidang',function (Blueprint $table) {
            $table->dropForeign('p_sidang_no_trans_foreign');
        });
        Schema::dropIfExists('table_p_sidang');
    }
}
