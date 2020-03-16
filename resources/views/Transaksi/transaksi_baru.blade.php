@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Transaksi Baru";
	document.getElementById('transaksi').classList.add('active');
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Entry  Transaksi Baru</h3>
				@if(Session::has('message'))
						<div class="alert alert-info"> {{Session::get('message')}} 
						</div> 
				@endif
				<form class="form-input" method="post" action="/add_transaksi" style="padding-top: 30px;">
					@csrf
					<label>Pilih Menu : </label>
					<select style="width: 372px;cursor: pointer;" required="required" name="id_barang">
							@foreach($menu as $m)
							<option value="{{$m->id_barang}}">{{$m->nama_barang}} (stock : {{$m->stok}}) | Harga : Rp. {{$m->harga_jual}}</option>
							@endforeach
					</select>
					<label>Jumlah Beli :</label>
					<input required="required" type="number" min="1" name="jumlah">
					<input type="hidden" name="trx" value="<?php echo date("d")."/AF/".'{{auth()->user()->id}}'."/".date("y") ?>">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
				</form>
				
			</div>
		</div>
		<br>
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Data transaksi</h3>
				<table class="datatable" style="width: 100%;">
				<thead>
				<tr>
					<th width="35px">NO</th>
					<th>ID Menu</th>
					<th>Nama Menu</th>
					<th>Jumlah Beli</th>
					<th>Total Harga</th>
					<th>Aksi</th>
				</tr>
			</thead>
			<tbody id="contenth">
				<?php $no=1; ?>
					@forelse($tempo_trx as $t)
					<tr>
						<td><?= $no++ ?></td>
						<td>{{$t->id_barang}}</td>
						<td>{{$t->nama_barang}}</td>
						<td>{{$t->jumlah_beli}}</td>
						<td>Rp. {{$t->total_harga}}</td>
						<td><a href="/deleteTempo" class="btn redtbl"><span class="btn-hapus-tooltip">Cancel</span><i class="fa fa-close"></i></a></td>
					</tr>
					@empty
					<tr>
						<td colspan="6">Data Masih Kosong</td>
					</tr>
					@endforelse
			</tbody>
				
				<tr>
				@foreach($total as $g)
					@if($g->grand_total > 0)
					<td colspan="3"></td><td>Grand Total :</td>
					<td> Rp. {{$g->grand_total}}</td>
					<td></td>
					@else
					<td colspan="6">Data masih kosong</td>
					@endif
				@endforeach
				</tr>
				
			</table>
			<br>
			<!-- <form class="form-input" action="handler.php?action=selesai_transaksi" method="post">
				@csrf
					<label>Nama Pembeli :</label>
					<input required="required" type="text" name="nama_pembeli">
					<input type="hidden" name="total_bayar" value="">
					<button class="btnblue" id="prosestran" type="submit"><i class="fa fa-save"></i> Proses Transaksi</button>
			</form> -->

			</div>
		</div>


	</div>
</div>
@stop