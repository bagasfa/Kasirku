<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Exports\TransaksiExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Transaksi;
use App\tempo;
use App\barang;
use DB;
use PDF;

class transaksiController extends Controller
{
    public function transaksiBaru(Request $request){
    	$menu = barang::all();
        $trx = $request->trx;
        $tempo_trx = barang::join('tempo','barang.id_barang','=','tempo.id_barang')
            ->select('barang.nama_barang','tempo.id_subtransaksi','tempo.id_barang','tempo.jumlah_beli','tempo.total_harga')->where('trx',$trx);
        $total = tempo::select(DB::raw("SUM(total_harga) as grand_total"))
            ->where('trx',$trx);
    	
        return view('Transaksi.transaksi_baru', compact('menu','total','tempo_trx'));
    }

    public function add_transaksi($id_barang, Request $request){
        $id_brg = $request->id_barang;
    	$menu = barang::where('id_barang',$id_brg);
        $tempo = tempo::where('id_barang',$id_brg);
        if($menu->stok < $request->jumlah){
            return view('Transaksi.transaksi_baru')->with('message','Stok tidak mencukupi');
        }else{
            $jumbel = $tempo->jumlah_beli+$request->jumlah;
            $total_harga = $jumbel*$menu->harga_jual;

            $tmp = new tempo;
            $tmp->id_barang = $request->id_barang;
            $tmp->jumlah_beli = $request->jumlah;
            $tmp->total_harga = $total_harga;
            $tmp->trx = $request->trx;
            $tmp->save();

            $mnu = find($id_barang);
            $mnu->stok = $mnu->stok-$request->jumlah;
            $mnu->save();
            return view('Transaksi.transaksi_baru');
        }
    	
    }

    public function deleteTempo($id_subtransaksi, $id_barang){
        $tempo = tempo::findOrFail($id_subtransaksi);
        $tempo->delete();

        $mnu = find($id_barang);
            $mnu->stok = $mnu->stok+$tempo->jumlah_beli;
            $mnu->save();
        return view('Transaksi.transaksi_baru');
    }

    public function saveTransaksi(){
    	
    }

    public function transExcel(){
        return Excel::download(new TransaksiExport, 'laporan.xlsx');
    }

    public function transPdf(){
        $report = Transaksi::all();

        $pdf = PDF::loadview('Transaksi.trx_pdf',['Transaksi'=>$report]);
        return $pdf->stream();
    }
}
