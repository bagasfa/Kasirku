<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\kategori;

class barang extends Model
{
	public $timestamps = false;
    protected $table = 'barang';
    protected $primaryKey = 'id_barang';

    protected $fillable = [
    	'nama_barang','stok','harga_jual','id_kategori','date_added'];

    public function kategori()
    {
    	return $this->belongsTo(kategori::class, 'id_kategori');
    }
}
