<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    
    public function up()
    {
        //
        Schema::create('lokasi',function (Blueprint $table){
            $table->engine = 'innodb';
            $table->char('id_lokasi',4)->primary();
            $table->string('nama_lokasi',255);
            $table->string('penanggung_jawab',255);
            $table->text('keterangan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('lokasi');
    }
};
