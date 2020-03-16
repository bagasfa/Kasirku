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
					<input type="text" name="username" placeholder="Username" required="required">

					<input type="password" name="password" placeholder="Password" required="required" minlength="6">

					<select name="status" required="">
						<option>- Pilih Role -</option>
						<option value="1"> Admin</option>
						<option value="2"> Kasir</option>
					</select>

					<input type="text" name="nama_user" placeholder="Nama User" required="required">

					<input type="text" name="telp" placeholder="No. Telpon" required="required" maxlength="12">

					<input type="file" name="foto" id="foto">

					<button class="btnblue" type="submit"><i class="fa fa-save"></i> Simpan</button>
					<a href="{{url('kasir')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
				</form>
			</div>
		</div>
	</div>
</div>
@stop