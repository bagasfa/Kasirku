@extends('layouts.main')

@section('content')
<script type="text/javascript">
	document.title="Tambah Kasir";
	document.getElementById('kasir').classList.add('active');
</script>
<div class="content">
	<div class="padding">
		<div class="bgwhite">
			<div class="padding">
				<h3 class="jdl">Tambah Kasir</h3>
				<form class="form-input" method="POST" action="{{url('kasir')}}" enctype="multipart/form-data">
					{{csrf_field()}}
					<input type="text" name="nama_kasir" placeholder="Nama Kasir" required="required">
					Jenis Kelamin
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="L" checked="">Laki - Laki
					</label>
					<label for="jenis_kelamin">
						<input type="radio" name="jenis_kelamin" id="jenis_kelamin" value="P">Perempuan
					</label>
					<input type="file" name="foto" id="foto">

					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{url('kasir')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop