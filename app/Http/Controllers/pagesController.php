<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use App\kasir;
use DB;

class pagesController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function menu(Request $request)
    {
        $barang = barang::when($request->search, function($query) use($request){
            $query->where('nama_barang', 'LIKE', '%'.$request->search.'%');
        })->paginate(10);
        
        return view('Menu.menu', compact('barang'));
    }

    public function kategori(Request $request){
        $kategori = kategori::when($request->search, function($query) use($request){
            $query->where('nama_kategori', 'LIKE', '%'.$request->search.'%');
        })->paginate(5);
        return view('Kategori.kategori')->with('cat',$kategori);
    }

    public function kasir(Request $request){
        $kasir = kasir::when($request->search, function($query) use($request){
            $query->where('nama_kasir', 'LIKE', '%'.$request->search.'%');
        })->paginate(10);
        return view('Kasir.kasir')->with('cs',$kasir);
    }
}
