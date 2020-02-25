<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableSubTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_transaksi', function (Blueprint $table) {
            $table->Increments('id_subtransaksi',11);
            $table->integer('id_barang',11);
            $table->integer('id_transaksi',11);
            $table->integer('jumlah_beli',11);
            $table->string('total_harga',20);
            $table->string('no_invoice',20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sub_transaksi');
    }
}
