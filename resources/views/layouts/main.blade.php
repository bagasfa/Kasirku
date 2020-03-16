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
			<img src="{{url('assets/images',auth()->user()->foto)}}">
		</li>
		<!-- Admin -->
		@if(auth()->user()->status == 1)
		<li><a id="dash" href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
		<li><a id="barang" href="/menu"><i class="fa fa-bars"></i> Menu</a></li>
		<li><a id="kategori" href="/kategori"><i class="fa fa-tags"></i> Kategori Menu</a></li>
		<li><a id="kasir" href="/kasir"><i class="fa fa-user"></i> Kasir</a></li>
		<li><a id="laporan" href="/laporan"><i class="fa fa-book"></i> Laporan Penjualan</a></li>

		<!-- Kasir -->
		@elseif(auth()->user()->status == 2)
		<li><a id="dash" href="/dashboard"><i class="fa fa-home"></i> Dashboard</a></li>
		<li><a id="transaksi" href="/transaksi"><i class="fa fa-money"></i> Transaksi</a></li>
		@endif
	</ul>
</div>
<div class="nav" style="background: #edf1f5;">
	<ul>
		<li><a href=""><i class="fa fa-male" style="color: black;"></i>&nbsp; <span style="color: black;">Hai, {{auth()->user()->nama_user}}</span></a>
		<ul>
			@if(auth()->user()->status == 1)
			<li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
			@elseif(auth()->user()->status == 2)
			<li><a href="/profile/{{auth()->user()->id}}"><i class="fa fa-user"></i> Profile</a></li>
			<li><a href="/logout"><i class="fa fa-sign-out"></i> Logout</a></li>
			@endif
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