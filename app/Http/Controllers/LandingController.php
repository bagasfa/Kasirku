<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use DB;

class LandingController extends Controller
{
    public function home(){

    	$drink = barang::where('id_kategori','24')->get();
    	$food = barang::where('id_kategori','14')->get();
    	$dessert = barang::where('id_kategori','17')->get();
    	$fav  = barang::where('id_barang','21')->get();
    	$fav2  = barang::where('id_barang','32')->get();
    	return view('LandingPage.home', compact('drink','food','dessert','fav','fav2'));
    }

    public function menu(){
    	return view('LandingPage.menu');
    }

    public function contact(){
    	return view('LandingPage.contact');
    }

    public function about(){
    	return view('LandingPage.about');
    }
}
