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
        Schema::create('tempo', function (Blueprint $table) {
            $table->increments('id_subtransaksi');
            $table->integer('id_barang')->unsigned();
            $table->integer('jumlah_beli');
            $table->string('total_harga',20);
            $table->string('trx',10);

            $table->foreign('id_barang')->references('id_barang')->on('barang')
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
        Schema::dropIfExists('table_tempo');
    }
}
