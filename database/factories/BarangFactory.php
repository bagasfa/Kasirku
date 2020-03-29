<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\barang;
use Faker\Generator as Faker;

$factory->define(barang::class, function (Faker $faker) {
    return [
       	'nama_barang' => $faker->name,
        'id_kategori' => $faker->numberBetween(1,5),
        'stok' => $faker->numberBetween(20,100),
        'harga_jual' => '20000',
        'date_added' => now() 
    ];
});
