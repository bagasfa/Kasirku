@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Transaksi";
	document.getElementById('transaksi').classList.add('active');
</script>
<script src="assets/main.js"></script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop">
				<div class="left">
					<a href="transaksi_baru" class="btnblue">Transaksi Baru</a>&nbsp;&nbsp;
					<form method="GET" style="float: right;">
    					<div class="form-inline my-2 my-lg-0">
      						<input type="text" name="search" class="form-control" placeholder="Cari disini ..." value="{{ request()->get('search') }}">
      						<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Cari</button>
      					</div>
    				</form>	
				</div>
				<div class="both"></div>
			</div>
			<span class="label">Jumlah Transaksi : {{ \DB::table('transaksi')->count()}}</span>
			<table class="datatable order-table">
				<thead>
				<tr>
					<th width="35px">NO</th>
					<th>Tanggal Transaksi</th>
					<th>Total Bayar</th>
					<th>Nama Pembeli</th>
					<th>No Invoice</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody>
				@forelse($transaksi as $key => $trx)
					<tr>
						<td>{{ $transaksi->firstItem() + $key }}</td>
						<td>{{ $trx->tgl_transaksi }}</td>
						<td>{{ $trx->total_bayar }}</td>
						<td>{{ $trx->nama_pembeli }}</td>
						<td>{{ $trx->no_invoice }}</td>
						<td>
							<a href="{{url('transaksi/'.$trx->id_transaksi. '/detilTransaksi')}}" class="btn bluetbl m-r-10"><span class="btn-edit-tooltip">Detail</span><i class="fa fa-eye"></i></a>
							<a href="{{url('transaksi/'.$trx->id_transaksi. '/cetakNota')}}" class="btn bluetbl" target="_blank"><span class="btn-hapus-tooltip">Cetak</span><i class="fa fa-print"></i></a>
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
			<div class="pull-right">{{ $transaksi->links() }}</div>
			<br>
			</div>
		</div>
	</div>
</div>
@stop
