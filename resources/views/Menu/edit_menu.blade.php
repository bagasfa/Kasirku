@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Edit Barang";
	document.getElementById('barang').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Edit Barang</h3>
				<form class="form-input" method="post" action="{{url('menu/' .$barang->id_barang. '/updateMenu')}}" style="padding-top: 30px;">
					@csrf
					<input type="hidden" name="id_barang" value="{{$barang->id_barang}}">
					<input type="text" placeholder="ID Kategori" disabled="disabled" value="ID barang : {{$barang->id_barang}}">
					<label>Nama Barang :</label>
					<input type="text" name="nama_barang" placeholder="Nama Barang" required="required" value="{{$barang->nama_barang}}">
					<label>Stock :</label>
					<input name="stok" placeholder="Stok" required="required" value="{{$barang->stok}}">
					<label>Harga Menu :</label>
					<input type="number" name="harga_jual" placeholder="Harga Jual" required="required" value="{{$barang->harga_jual}}">
					<label>Kategori :</label>
					<select style="width: 372px;cursor: pointer;" required="required" name="id_kategori">
						@foreach($cat as $kategori)
                    		<option value="{{ $kategori->id_kategori }}" {{ ($barang->id_kategori == $kategori->id_kategori) ? 'selected' : ''}}>{{ $kategori->nama_kategori }}</option>
                  		@endforeach
					</select>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{url('/menu')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop