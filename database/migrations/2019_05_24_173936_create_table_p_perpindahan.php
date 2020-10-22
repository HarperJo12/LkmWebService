<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePPerpindahan extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('p_perpindahan', function (Blueprint $table) {
            $table->integer('No_Trans')->unsigned()->primary('No_Trans');
            $table->string('Kls_Awal',100);
            $table->string('Kls_Akhir',100);
            $table->string('Jjg_Awal',100);
            $table->string('Jjg_Akhir',100);
            $table->string('Jrs_Awal',100);
            $table->string('Jrs_Akhir',100);
            $table->string('Bdg_Awal',100);
            $table->string('Bdg_Akhir',100);
            $table->string('Tahun_Sem',50);
            $table->string('Keterangan',300);
            $table->string('Lampiran1')->nullable();
            $table->string('Lampiran2')->nullable();
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
        Schema::table('p_perpindahan',function (Blueprint $table) {
            $table->dropForeign('p_perpindahan_no_trans_foreign');
        });
        Schema::dropIfExists('table_p_perpindahan');
    }
}
