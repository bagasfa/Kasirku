<!DOCTYPE html>
<html>
<head>
	<title>Kopi Sawah</title>
	<link rel="icon" type="image/png" href="assets/logo.png">
	<link rel="stylesheet" type="text/css" href="assets/css.css">
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="assets/awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/wow/animate.css">
	<style type="text/css">
		@font-face{
			font-family: titillium;
			src:url(../assets/TitilliumWeb-SemiBold.ttf);
		}
		*{
			margin: 0;
			padding: 0;
			font-family: titillium;
		}
	</style>
</head>
<body align="center" style="background-image: url(assets/bgr.jpg); background-size: 100%">
		<div class="login" style="background: rgba(255,255,255,0.85);">
			<div class="padding" style="border: 2px solid black; border-radius: 10px;">
				<div id="clock" align="center"></div>
		<script type="text/javascript">
		function showTime() {
		    var a_p = "";
		    var today = new Date();
		    var curr_hour = today.getHours();
		    var curr_minute = today.getMinutes();
		    var curr_second = today.getSeconds();
		    if (curr_hour < 12) {
		        a_p = "AM";
		    } else {
		        a_p = "PM";
		    }
		    if (curr_hour == 0) {
		        curr_hour = 12;
		    }
		    if (curr_hour > 12) {
		        curr_hour = curr_hour - 12;
		    }
		    curr_hour = checkTime(curr_hour);
		    curr_minute = checkTime(curr_minute);
		    curr_second = checkTime(curr_second);
		 	document.getElementById('clock').innerHTML=curr_hour + ":" + curr_minute + ":" + curr_second + " " + a_p;
		    }
 
		function checkTime(i) {
		    if (i < 10) {
		        i = "0" + i;
		    }
		    return i;
		}
		setInterval(showTime, 500);
		</script>
				<h1 align="center">LOGIN PAGE</h1>
				<form id="loginapp" action="/postLogin" method="POST">
					{{csrf_field()}}
					<input type="text" name="username" placeholder="Masukkan Username" required=""/>
					<div class="form-group">
				    <div class="input-group" id="show_hide_password">
				    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Masukkan Password" required="">
				    <div class="input-group-addon eye">
				    	<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
				    </div>
					</div>
				    <input name="status" type="hidden" value="2">
				</div>
					<br>
					@if(Session::has('message'))
						<div class="alert alert-info"> {{Session::get('message')}} 
						</div> 
					@endif
					<br><br>
					<button type="submit"><i class="fa fa-sign-in"></i> Login</button>
					<button type="button" class="btn" data-toggle="modal" data-target="#formRegister"><i class="fa fa-edit"></i> Register</button>
					<div class="both"></div>
				</form>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="formRegister" tabindex="-1" role="dialog" aria-labelledby="formRegister" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">	
		      <div class="modal-header">
		        <h5 class="modal-title" id="RegisterLabel">Form Registrasi</h5>
		      </div>
		      <div class="modal-body">
				<form action="/register" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
				    <label for="inputUsername">Username <i style="color: red;">*</i></label>
				    <input name="username" type="text" class="form-control" id="inputUsername" placeholder="Username" required="">
				</div>
				<div class="form-group">
				    <label for="inputPassword">Password <i style="color: red;">*</i></label>
				    <div class="input-group" id="show_hide_password">
				    <input name="password" type="password" class="form-control" id="inputPassword" placeholder="Password" required="">
				    <div class="input-group-addon eye2">
				    	<a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
				    </div>
					</div>
				    <input name="status" type="hidden" value="2">
				</div>
				<div class="form-group">
				    <label for="inputNama">Nama Kasir <i style="color: red;">*</i></label>
				    <input name="nama_kasir" type="text" class="form-control" id="inputNama" placeholder="Nama Kasir" required="">
				</div>
				<div class="form-group">
				    <label for="inputTelp">No. Telpon <i style="color: red;">*</i></label>
				    <input name="telp" type="text" class="form-control" id="inputTelp" placeholder="Ex : 0856xxxx" maxlength="12" required="">
				</div>
				<div class="form-group">
					<label for="inputFoto">Foto Diri</label><br>
					<input type="file" name="foto" id="inputFoto">
				</div>

				<br>
				<span style="font-size: 12px;"><i style="color: red;"> * </i> : Data harus terisi</span>

		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Register</button>
		        </form>
		      </div>
		    </div>
		  </div>
		  <!-- Modal -->
	<script type="text/javascript" src="{{asset('assets/jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/jquery-3.3.1.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap-show-password.js')}}"></script>
	<script type="text/javascript" src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</body>
</html>
