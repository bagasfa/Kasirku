<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->Increments('id', 11);
            $table->string('username', 100);
            $table->string('password');
            $table->integer('status', 11);
            $table->string('nama_user', 100);
            $table->string('telp'12);
            $table->string('foto', 200);
            $table->time_stamp('date_created');
        });

        Schema::table('transaksi',fucntion ($table){
            $table->foreign('kode_kasir')->references('id')->on('user')
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
        Schema::dropIfExists('user');
    }
}
