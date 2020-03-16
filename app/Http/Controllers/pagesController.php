<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\MenuExport;
use Maatwebsite\Excel\Facades\Excel;
use App\barang;
use App\Transaksi;
use App\Sub_transaksi;
use App\kategori;
use App\User;
use DB;
use PDF;

class pagesController extends Controller
{

    public function dashboard(){
        return view('dashboard');
    }

    public function transaksi(Request $request)
    {
        $transaksi = Transaksi::where('kode_kasir', auth()->user()->id)->paginate(10);
        
        return view('Transaksi.transaksi', compact('transaksi'));
    }

    public function detilTransaksi($id_transaksi)
    {
        $transaksi = Transaksi::find($id_transaksi);
        $sub_trx = barang::join('sub_transaksi','barang.id_barang','=','sub_transaksi.id_barang')
                ->select('barang.nama_barang','barang.harga_jual','sub_transaksi.jumlah_beli','sub_transaksi.total_harga')
                ->find($id_transaksi);
        $total = Sub_transaksi::select(DB::raw("SUM(total_harga) as grand_total, SUM(jumlah_beli) as jumlah_beli"))
            ->find($id_transaksi);
        
        return view('Transaksi.detil_transaksi', compact('transaksi','sub_trx','total'));
    }

    public function laporan(Request $request)
    {
        $report = Transaksi::when($request->search, function($query) use($request){
            $query->where('nama_pembeli', 'LIKE', '%'.$request->search.'%');
        })->paginate(10);
        
        return view('Transaksi.laporan', compact('report'));
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
        $kasir = User::when($request->search, function($query) use($request){
            $query->where('username', 'LIKE', '%'.$request->search.'%', 'OR', 'nama_user', 'LIKE', '%'.$request->search.'%');
        })->paginate(10);
        return view('Kasir.kasir')->with('cs',$kasir);
    }

    public function menuExcel(){
        return Excel::download(new MenuExport, 'menu.xlsx');
    }

    public function menuPdf(){
        $barang = barang::all();

        $pdf = PDF::loadview('Menu.menu_pdf',['barang'=>$barang]);
        return $pdf->download('laporan-menu.pdf');
    }
}
