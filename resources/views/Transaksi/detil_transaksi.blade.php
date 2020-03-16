@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Detail transaksi";
	document.getElementById('transaksi').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Detail Transaksi</h3>
				@foreach($transaksi as $trans)
				<table>
					<tr>
						<td><span class="label">Nama Pembeli</span></td><td><span class="label">:</span></td>
						<td><span class="label">{{$trans->nama_pembeli}}</span></td>
					</tr>
					<tr>
						<td><span class="label">Tanggal Transaksi</span></td><td><span class="label">:</span></td>
						<td><span class="label">{{$trans->tgl_transaksi}}</span></td>
					</tr>
					<tr>
						<td><span class="label">No Invoice</span></td><td><span class="label">:</span></td>
						<td><span class="label">{{$trans->no_invoice}}</span></td>
					</tr>
				</table>
				@endforeach
				<table class="datatable" style="width: 100%;">
					<thead>
					<tr>
						<th width="35px">NO</th>
						<th>Nama Barang</th>
						<th>Jumlah Beli</th>
						<th>Harga</th>
						<th>Total Harga</th>
					</tr>
					</thead>
					<tbody>
					@php $i=1 @endphp
					@foreach($sub_trx as $sub)
					@foreach($total as $t)
					<tr>
						<td>{{ $i++ }}</td>
						<td>{{$sub->nama_barang}}</td>
						<td>{{$t->jumlah_beli}}</td>
						<td>Rp. {{$sub->harga_jual}}</td>
						<td>Rp. {{$sub->total_harga}}</td>
					</tr>
					<tr>
						<td></td><td></td><td></td><td>Grand Total :</td><td> Rp. {{$t->grand_total}}</td>
					</tr>
					@endforeach
					@endforeach
					</tbody>
				</table>
				<br>
				<div class="left">
					<a href="/transaksi" class="btnblue" style="background: #f33155"><i class="fa fa-mail-reply"></i> Kembali</a>
					<a href="/transaksi/cetakNota" class="btnblue" target="_blank"><i class="fa fa-print"></i> Cetak Nota</a>
				</div>
			</div>
		</div>
	</div>
</div>
@stop