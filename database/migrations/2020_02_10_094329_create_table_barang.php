<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableBarang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->Increments('id_barang');
            $table->string('nama_barang');
            $table->integer('id_kategori')->unsigned();
            $table->integer('stok');
            $table->string('harga_jual');
            $table->date('date_added');

            $table->foreign('id_kategori')->references('id_kategori')->on('kategori')
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
        Schema::dropIfExists('barang');
    }
}
