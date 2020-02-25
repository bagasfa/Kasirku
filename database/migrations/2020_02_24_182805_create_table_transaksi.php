<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableTransaksi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->Increments('id_transaksi',11);
            $table->timestamp('tgl_transaksi');
            $table->integer('kode_kasir',11);
            $table->string('total_bayar',20);
            $table->string('no_invoice',20);
            $table->string('nama_pembeli',20);

            $table->foreign('id_transaksi')->references('id_transaksi')->on('sub_transaksi')
                    ->onDelete('restrict')
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
        Schema::dropIfExists('transaksi');
    }
}
