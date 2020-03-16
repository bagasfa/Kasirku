<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="icon" type="image/png" href="{{asset('assets/logo.png')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/index.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('assets/awesome/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('assets/awesome/css/beyond_the_mountains-webfont.css')}}" type="text/css"/>
	<script type="text/javascript" src="{{asset('assets/jquery.js')}}"></script>
</head>
<body>

<div class="sidebar" style="background: #d8d8d8; border-right: 2px white;">
	<center><h3>PROFILE</h3></center>
	<ul>
		<li><a id="profile" href="/profile/{{auth()->user()->id}}"><i class="fa fa-document"></i> Data Diri</a></li>
		<li><a id="password" href="/profile/{{auth()->user()->id}}/changePw"><i class="fa fa-lock"></i> Ganti Password</a></li>
		<li><a id="back" href="/dashboard"><i class="fa fa-mail-reply"></i> Kembali</a></li>
	</ul>
</div>
<div class="nav" style="background: #edf1f5;">
	<ul>
		<li><a href=""><i class="fa fa-male" style="color: black;"></i>&nbsp; <span style="color: black;">Hai, {{auth()->user()->nama_user}}</span></a>
		<ul>
			<li><a href="/profile/{{auth()->user()->id}}"><i class="fa fa-user"></i> Profile</a></li>
			<li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
		</ul>
		</li>
	</ul>
</div>

	@yield('content')

<footer class="both" style="padding-left: 22%; padding-top: 0.4%;">
    <strong>Copyright &copy; <?php echo date("Y") ?> Kopi Sawah</strong>
</footer>
</body>
</html>