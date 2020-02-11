<?php

use Illuminate\Database\Seeder;

class TabelKasirSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\kasir::create([
        	'nama_kasir'  => str_random(20),
        	'alamat' => str_random(100) . '@codepolitan.com',
        	'foto'  => 'https://source.unsplash.com/random'
        ]);
    }
}
