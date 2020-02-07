<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\barang;
use App\kategori;
use App\kasir;
use DB;

class crudController extends Controller
{
    public function tambah_menu(){
    	$kategori = kategori::all();
    	return view('tambah_menu')->with('cat',$kategori);
    }

    public function storeMenu(Request $request){
    	$barang = new barang;
    	$barang->nama_barang = $request->nama_barang;
    	$barang->id_kategori = $request->id_kategori;
    	$barang->stok = $request->stok;
    	$barang->harga_jual = $request->harga_jual;
    	$barang->save();
    	return redirect('/');
    }

    public function deleteMenu($id_barang){
        $barang = barang::findOrFail($id_barang);
        $barang->delete();
        return redirect('/');
    }

    public function editMenu($id_barang){
        $barang = barang::findOrFail($id_barang);
        return view('edit_menu', compact('barang'));
    }

    public function updateMenu($id_barang, Request $request){
        $barang = barang::findOrFail($id_barang);
        $barang->id_barang = $request->id_barang;
        $barang->nama_barang = $request->nama_barang;
        $barang->id_kategori = $request->id_kategori;
        $barang->stok = $request->stok;
        $barang->harga_jual = $request->harga_jual;
        $barang->save();
        return redirect('/');
    }

    public function storeCat(Request $request){
    	$kategori = new kategori;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('kategori');
    }

    public function deleteCat($id_kategori){
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->delete();
    	return redirect('kategori');
    }

    public function editCat($id_kategori){
    	$kategori = kategori::findOrFail($id_kategori);
    	return view('edit_cat', compact('kategori'));
    }

    public function updateCat($id_kategori, Request $request){
    	$kategori = kategori::findOrFail($id_kategori);
    	$kategori->id_kategori = $request->id_kategori;
    	$kategori->nama_kategori = $request->nama_kategori;
    	$kategori->save();
    	return redirect('kategori');
    }

    public function tambah_kasir(){
        $kasir = kasir::all();
        return view('tambah_kasir')->with('cs',$kasir);
    }

    public function storeKasir(Request $request){
        request()->validate([
            'nama_kasir' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'        
        ]);
        $foto = $request->file('foto');
        $extension = $foto->getClientOriginalExtension();
        Storage::disk('public')->put($foto->getFilename().'.'.$extension,  File::get($foto));

        $kasir = new kasir;
        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->foto = $foto->getFilename().'.'.$extension;
        $kasir->save();
        return redirect('/kasir');
    }

    public function deleteKasir($id_kasir){
        $kasir = kasir::findOrFail($id_kasir);
        $kasir->delete();
        return redirect('/kasir');
    }

    public function editKasir($id_kasir){
        $kasir = kasir::findOrFail($id_kasir);
        return view('edit_kasir', compact('kasir'));
    }

    public function updateKasir($id_kasir, Request $request){
        $this->validate($request,[
           'nama_kasir' => 'required',
            'jenis_kelamin' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        $kasir = kasir::find($id_kasir);

        if ($files = $request->file('fotoUp')){
            $usersImage = public_path("assets/images/{$kasir->foto}"); // get previous image from folder

         if (File::exists($usersImage)) { // unlink or remove previous image from folder
            unlink($usersImage);
        }
        $destinationPath = 'assets/images/'; // upload path
        $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
        $files->move($destinationPath, $profileImage);
        $insert['foto'] = "$profileImage";


        $kasir->nama_kasir = $request->nama_kasir;
        $kasir->jenis_kelamin = $request->jenis_kelamin;
        $kasir->foto = $insert['foto'] = "$profileImage";
        }
        $kasir->save();
        return redirect('/kasir');
    }
}
