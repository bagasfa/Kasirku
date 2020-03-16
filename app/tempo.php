<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tempo extends Model
{
    public $timestamps = false;
    protected $table = 'tempo';

    protected $fillable = [
    	'id_subtransaksi','id_barang','jumlah_beli','total_harga','trx'];
}
