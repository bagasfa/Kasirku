<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableKasir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kasir', function (Blueprint $table) {
            $table->bigIncrements('id_kasir');
            $table->string('nama_kasir');
            $table->string('telp');
            $table->string('foto');
            $table->timestamp('date_added');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kasir');
    }
}
