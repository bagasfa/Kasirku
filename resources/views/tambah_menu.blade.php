@extends('layouts.main')


@section('content')
<script type="text/javascript">
	document.title="Tambah Menu";
	document.getElementById('barang').classList.add('active');
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah Menu</h3>
				<form class="form-input" method="POST" action="{{url('/')}}">
					@csrf
					<input type="text" name="nama_barang" placeholder="Nama Menu" required="required">
					<input type="number" name="stok" placeholder="Stok" required="required">
					<input type="hidden" name="harga_beli" value="0">
					<input type="number" name="harga_jual" placeholder="Harga Menu" required="required">
					<select style="width: 372px;cursor: pointer;" required="required" name="kategori">
							<option value="">Pilih Kategori :</option>
						@foreach ($cat as $kategori)
							<option value="{{$kategori->id_kategori}}"> {{$kategori->nama_kategori}}</option>
						@endforeach
					</select>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="/" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop