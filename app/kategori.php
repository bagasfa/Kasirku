<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
	public $timestamps = false;
    protected $table = 'kategori';
    protected $primaryKey = 'id_kategori';

    protected $fillable = ['id_kategori','nama_kategori'];
}
