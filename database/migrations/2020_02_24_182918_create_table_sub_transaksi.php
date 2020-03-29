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
            $table->increments('id_subtransaksi');
            $table->integer('id_barang')->unsigned();
            $table->integer('id_transaksi')->unsigned();
            $table->integer('jumlah_beli');
            $table->string('total_harga',20);
            $table->string('no_invoice',20);

            $table->foreign('id_barang')->references('id_barang')->on('barang')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('id_transaksi')->references('id_transaksi')->on('transaksi')
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
        Schema::dropIfExists('sub_transaksi');
    }
}
