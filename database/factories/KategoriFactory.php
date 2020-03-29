<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\kategori;
use Faker\Generator as Faker;

$factory->define(kategori::class, function (Faker $faker) {
    return [
        'nama_kategori' => $faker->colorName
    ];
});
