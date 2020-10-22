<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePMatkulDet extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('p_matkul_det', function (Blueprint $table) {
            $table->increments('Id');
            $table->string('Kode_Mk');
            $table->string('Nama_Mk', 500);
            $table->date('Tgl_Kuliah');
            $table->string('Jam', 50);
            $table->string('Kelas',2);
            $table->integer('Stat');
            $table->integer('No_Trans')->unsigned();
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
        Schema::table('p_matkul_det',function (Blueprint $table) {
            $table->dropForeign('p_matkul_det_no_trans_foreign');
        });
        Schema::dropIfExists('p_matkul_det');
    }
}
