<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\barang;
use App\kategori;
use App\kasir;
use DB;

class pagesController extends Controller
{

    public function menu()
    {
    	$barang = barang::join('kategori','barang.id_kategori','=','kategori.id_kategori')->get();
        $barang = barang::paginate(10);
    	return view('menu')->with('items',$barang);
    }

    public function kategori(){
    	$kategori = kategori::all();
        $kategori = kategori::paginate(5);
    	return view('kategori')->with('cat',$kategori);
    }

    public function kasir(){
    	$kasir = kasir::all();
        $kasir = kasir::paginate(5);
    	return view('kasir')->with('cs',$kasir);
    }

    public function cariMenu(Request $request)
    {
        
        $cariMenu = $request->cariMenu;
 
        $barang = DB::table('barang')
        ->where('nama_barang','like',"%".$cariMenu."%")
        ->orWhere('harga_jual', 'like', "%".$cariMenu."%")
        ->paginate();
 
        return view('menu',['items' => $barang]);
 
    }
}
