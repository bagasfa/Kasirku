<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kasir extends Model
{
	public $timestamps = false;
    protected $table = 'kasir';
    protected $primaryKey = 'id_kasir';

    protected $fillable = [
    	'nama_kasir','jenis_kelamin','foto','date_added'];
}
