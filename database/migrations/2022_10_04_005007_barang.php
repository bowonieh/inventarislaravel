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
        Schema::create('barang',function (Blueprint $table){
            $table->engine = 'innodb';
            $table->char('id_barang',8)->primary();
            $table->string('nama_barang',255);
            $table->text('spesifikasi')->nullable();
            $table->string('lokasi',4);
            $table->string('kondisi',20);
            $table->integer('jumlah_barang');
            $table->char('sumber_dana',4);

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
        Schema::dropIfExists('barang');
    }
};
