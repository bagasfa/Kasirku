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
			<div class="contenttop"><center><h2>Cetak Data Menu (PDF)</h2></center>
			</div>
			<table class="datatable order-table" id="datatable">
				<thead>
				<tr>
					<th width="10px">#</th>
					<th >Nama Menu</th>
					<th  width="100px">Kategori</th>
					<th>Stok</th>
					<th width="120px">Harga Menu</th>
					<th width="150px">Tanggal Ditambahkan</th>
				</tr>
			</thead>
			<tbody>
					@php $i=1 @endphp
					@forelse($barang as $value)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{ $value->nama_barang }}</td>
						<td>{{ $value->kategori->nama_kategori }}</td>
						<td>{{ $value->stok }}</td>
						<td>Rp. {{ $value->harga_jual }}</td>
						<td>{{ $value->date_added }}</td>
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