@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Laporan Penjualan";
	document.getElementById('laporan').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">

				<div class="left">
					<h3 class="jdl">Laporan penjualan</h3>
				</div>
				<br><br>
				<div class="left">
					<form method="GET" style="float: right;">
    					<div class="form-inline my-2 my-lg-0">
      						<input type="text" name="search" class="form-control" placeholder="Cari disini ..." value="{{ request()->get('search') }}">
      						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      					</div>
    				</form>	
				</div>
				<div class="right">
					<a href="/laporan/laporan_ex" class="btngreen"><i class="fa fa-print"></i> Export XLS</a>
					<a href="/laporan/laporan_pdf" class="btnred"><i class="fa fa-print"></i> Export PDF</a>
				</div>
				<br>
				<span class="label">Jumlah Transaksi : {{ \App\Transaksi::count()}}</span>
				<table class="datatable" id="datatable">

					<thead>
						<tr>
							<th width="10px">#</th>
							<th>No Invoice</th>
							<th>Kasir</th>
							<th>Pembeli</th>
							<th>Tanggal Transaksi</th>
							<th>Total Bayar</th>
							<th width="60px">Aksi</th>
						</tr>
					</thead>
					<tbody>
						@forelse($report as $key => $r)
						<tr>
							<td>{{ $report->firstItem() + $key }}</td>
							<td>{{ $r->no_invoice }}</td>
							<td>{{ $r->user->nama_user }}</td>
							<td>{{ $r->nama_pembeli }}</td>
							<td>{{ $r->tgl_transaksi }}</td>
							<td>Rp. {{ $r->total_bayar }}</td>
							<td>
								<a href="{{url('transaksi/'.$r->id_transaksi. '/detilTransaksi')}}" class="btn bluetbl m-r-10"><span class="btn-edit-tooltip">Detail</span><i class="fa fa-eye"></i></a>
								<a href="{{url('transaksi/'.$r->id_transaksi. '/deleteReport')}}" class="btn bluetbl" target="_blank"><span class="btn-hapus-tooltip">Hapus</span><i class="fa fa-print"></i></a>
							</td>
						</tr>
						@empty
						<tr>
							<td colspan="7">Belum ada Trasaksi.</td>
						</tr>
						@endforelse
					</tbody>
				</table>
				<br>
				<div class="pull-right">{{ $report->links() }}</div>
				<br>
			</div>
		</div>
	</div>
</div>
@stop
