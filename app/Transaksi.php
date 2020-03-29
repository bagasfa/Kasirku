<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Transaksi extends Model
{
    public $timestamps = false;
    protected $table = 'transaksi';
    protected $primaryKey = 'id_transaksi';

    protected $fillable = [
    	'kode_kasir','tgl_transaksi','total_bayar','no_invoice','nama_pembeli'];

    public function user()
    {
    	return $this->belongsTo('App\User', 'kode_kasir','id');
    }
}
