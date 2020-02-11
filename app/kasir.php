<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
	public $timestamps = false;
    protected $table = 'kasir';
    protected $primaryKey = 'id_kasir';

    protected $fillable = [
    	'nama_kasir','telp','foto','date_added'];
}
