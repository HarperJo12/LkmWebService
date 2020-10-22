<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCustomerService extends Migration
{
    /**
     * Run the migrations.
     * @Author Marcel 2019 *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_service', function (Blueprint $table) {
            $table->string('NIK')->primary('NIK');
            $table->string('Nama_Lkp');
            $table->timestamps();
        });

        Schema::table('tiket', function (Blueprint $table){
            $table->foreign('NIK_Cs')
                ->references('NIK')->on('customer_service')
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
        Schema::table('tiket', function (Blueprint $table){
            $table->dropForeign('tiket_nik_cs_foreign');
        });
        Schema::dropIfExists('customer_service');
    }
}
