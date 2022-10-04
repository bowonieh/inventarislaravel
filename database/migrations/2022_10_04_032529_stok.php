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
        Schema::create('stok',function (Blueprint $table){
            $table->char('id_barang',8)->primary();
            $table->integer('jml_masuk')->nullable();
            $table->integer('jml_keluar')->nullable();
            $table->integer('total_barang')->nullable();
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
        Schema::dropIfExists('stok');
    }
};
