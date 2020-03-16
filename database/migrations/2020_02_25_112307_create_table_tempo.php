<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTempo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_tempo', function (Blueprint $table) {
            $table->bigIncrements('id_subtransaksi',11);
            $table->integer('id_barang',11);
            $table->integer('jumlah_beli',11);
            $table->string('total_harga',20);
            $table->string('trx',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('table_tempo');
    }
}
