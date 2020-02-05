@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Edit Kategori Barang";
	document.getElementById('kategori').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Edit Kategori</h3>
				<form class="form-input" method="POST" action="{{url('kategori/' .$kategori->id_kategori. '/updateCat')}}">
					<input type="text" placeholder="ID Kategori" disabled="disabled" value="ID kategori : {{$kategori->id_kategori}}">
					<input type="text" name="nama_kategori" placeholder="Nama Barang" required="required" value="{{$kategori->nama_kategori}}">
					<input type="hidden" name="id_kategori" value="{{$kategori->id_kategori}}">
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Update</button>
					<a href="{{url('kategori')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop