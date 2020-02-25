<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\barang;
use App\Transaksi;

class Sub_transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'sub_transaksi';
    protected $primaryKey = 'id_subtransaksi';

    protected $fillable = [
    	'id_barang','id_transaksi','jumlah_beli','total_harga','no_invoice'];

    public function barang()
    {
    	return $this->belongsTo(sub_transaksi::class, 'id_transaksi');
    }
    public function transaksi()
    {
    	return $this->belongsTo(barang::class, 'id_barang');
    }
}
