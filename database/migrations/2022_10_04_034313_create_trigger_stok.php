<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
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
        DB::unprepared('
            CREATE TRIGGER tr_stok_barang AFTER INSERT ON `barang` FOR EACH ROW
                BEGIN
                    INSERT INTO stok (id_barang,jml_masuk,jml_keluar,total_barang) 
                    VALUE
                    (NEW.id_barang,0,0,0);
                END
        ');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::unprepared('DROP TRIGGER tr_stok_barang');
    }
};
