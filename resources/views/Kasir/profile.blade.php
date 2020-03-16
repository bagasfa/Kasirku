@extends('layouts.main2')

@section('content')
<script type="text/javascript">
	document.title="Profile Kasir";
	document.getElementById('profile').classList.add('active');
	function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(200)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<div class="content" style="background-image: url('{{asset('assets/bgr.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
	<div class="padding" style="text-align: center; height: 100%; color: white;">
		<br><br>
		<hr>
			<marquee><h1>SELAMAT DATANG DI HALAMAN PROFILE, SEMANGAT MENJALANI HARI DAN TERUSLAH BEKERJA KERAS</h1></marquee>
		<hr>
		<br>
	<br>
	<center>
		<div class="layer">
		<form name="update_profil" method="post" action="{{url('profile/' .$profile->id. '/updateProfile')}}" enctype="multipart/form-data">
			{{csrf_field()}}
	    	<img id="blah" class="profile-pic" src="{{url('assets/images',auth()->user()->foto)}}" alt="your image" />
			<br>
			<input type='file' class="custom-file-input" name="foto" accept="image/jpg, image/jpeg, image/png" onchange="readURL(this);"/>
			<br><br>
			<div class="form__group">
				<input type="text" id="username" class="form__input" name="username" placeholder="Username" required="required" value="{{$profile->username}}">
				<label for="username" class="form__label">Username</label>
			</div>
			<div class="form__group">
				<input type="text" id="nama_user" class="form__input" name="nama_user" placeholder="Nama Lengkap" required="required" value="{{$profile->nama_user}}">
				<label for="username" class="form__label">Nama Lengkap</label>
			</div>
			<div class="form__group">
				<input type="text" id="telp" class="form__input" name="telp" placeholder="No. Telpon" required="required" value="{{$profile->telp}}">
				<label for="telp" class="form__label">No. Telpon</label>
			</div>
			<br>
			<div class="form-input">
				<button class="btnblue" type="submit"><i class="fa fa-save"></i> Update</button>&nbsp;
				<a href="{{url('/dashboard')}}" class="btnblue" style="background: #f33155"><i class="fa fa-close"></i> Batal</a>
			</div>
		</form>
		</div>
	</center>
	</div>
</div>
@stop