@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Edit Kasir";
	document.getElementById('users').classList.add('active');
</script>

<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Edit Kasir</h3>
				<form class="form-input" method="POST" action="{{url('kasir/' .$kasir->id_kasir. '/updateKasir')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					{{$kasir->id_kasir}}
					<input type="hidden" name="id" value="{{$kasir->id_kasir}}">
					<input type="text" name="nama_kasir" placeholder="Nama Kasir" required="required" value="{{$kasir->nama_kasir}}">
					
					Jenis Kelamin
					@if($kasir->jenis_kelamin=="L")
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked="">Laki - Laki
					</label>
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan
					</label>
					
					@elseif($kasir->jenis_kelamin=="P")
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L">Laki - Laki
					</label>
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P" checked="">Perempuan
					</label>
					@endif
					&nbsp;
					
					<input type="file" name="fotoUp" id="fotoUp"/>
					<img src="{{url('assets/images/'.$kasir->foto)}}" width="100px" height="100px" alt="{{$kasir->foto}}">

					<br><br>
					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{url('kasir')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop