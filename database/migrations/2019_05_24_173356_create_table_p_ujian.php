<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePUjian extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('p_ujian', function (Blueprint $table) {
            $table->integer('No_Trans')->unsigned()->primary('No_Trans');
            $table->string('Jenis',10);
            $table->string('Tahun_Sem',50);
            $table->date('Tgl_Awal');
            $table->date('Tgl_Akhir');
            $table->string('Keterangan',300);
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
        Schema::table('p_ujian',function (Blueprint $table) {
            $table->dropForeign('p_ujian_no_trans_foreign');
        });
        Schema::dropIfExists('table_p_ujian');
    }
}
