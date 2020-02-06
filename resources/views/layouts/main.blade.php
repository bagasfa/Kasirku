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
	<center><h3>KOPI SAWAH</h3></center>
	<ul>
		<li class="admin-info">
			<img src="{{asset('assets/logo.jpg')}}">
		</li>
		<li><a id="barang" href="/"><i class="fa fa-bars"></i> Menu</a></li>
		<li><a id="kategori" href="kategori"><i class="fa fa-tags"></i> Kategori Menu</a></li>
	</ul>
</div>

	@yield('content')

<footer class="both" style="padding-left: 22%; padding-top: 0.4%;">
    <strong>Copyright &copy; <?php echo date("Y") ?> Kopi Sawah</strong>
</footer>
</body>
</html>