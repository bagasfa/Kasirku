<!DOCTYPE html>
<html>
<head>
	<title>Export PDF</title>
	@include('css.pdf-css')
</head>
<body>
<div class="content_pdf">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
			<div class="contenttop"><center><h2>Cetak Laporan Transaksi (PDF)</h2></center>
			</div>
			<table class="datatable order-table" id="datatable">
				<thead>
				<tr>
					<th width="10px">#</th>
					<th>No. Invoice</th>
					<th>Kasir</th>
					<th>Pembeli</th>
					<th>Tanggal Transaksi</th>
					<th>Total Bayar</th>
				</tr>
			</thead>
			<tbody>
					@php $i=1 @endphp
					@forelse($report as $t)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $t->no_invoice }}</td>
						<td>{{ $t->user->nama_user }}</td>
						<td>{{ $t->nama_pembeli }}</td>
						<td>{{ $t->tgl_transaksi }}</td>
						<td>Rp. {{ $t->total_bayar }}</td>
					</tr>
					@empty
					<tr>
						<td colspan="7">Data Kosong.</td>
					</tr>
					@endforelse
			</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
</body>
</html>