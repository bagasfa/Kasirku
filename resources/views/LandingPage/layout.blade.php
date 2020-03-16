<!DOCTYPE html>
<html lang="en">
<head>
<title>Kopi Sawah</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The Venue template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="{{asset('assets/logo.png')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('assets/plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="{{asset('assets/plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/plugins/jquery-datepicker/jquery-ui.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('assets/plugins/jquery-timepicker/jquery.timepicker.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/menu_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/contact.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/contact_responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/about.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/about_responsive.css')}}">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Alex+Brush|Great+Vibes|PT+Sans+Narrow:400,700');
	@font-face{
	font-family: 'Edward';
	src: url(assets/fonts/edwardian_script_itc.ttf) format('truetype'),
	url(assets/fonts/edwardian_script_itc.otf) format('opentype');
	}
</style>
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<div class="logo">
							<a href="/">
								<div>Kop Sawah</div>
								<div>café & resto</div>
							</a>
						</div>
						<nav class="main_nav">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li><a href="/">home</a></li>
								<li><a href="/lMenu">menu</a></li>
								<li><a href="/lContact">contact</a></li>
								<li><a href="/lAbout">about us</a></li>
							</ul>
						</nav>
						<div class="reservations_phone ml-auto"><a href="/login" style="color: white;">LOGIN</a></div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<!-- Hamburger -->
	
	<div class="hamburger_bar trans_400 d-flex flex-row align-items-center justify-content-start">
		<div class="hamburger">
			<div class="menu_toggle d-flex flex-row align-items-center justify-content-start">
				<span>menu</span>
				<div class="hamburger_container">
					<div class="menu_hamburger">
						<div class="line_1 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
						<div class="line_2 hamburger_lines" style="visibility: inherit; opacity: 1;"></div>
						<div class="line_3 hamburger_lines" style="transform: matrix(1, 0, 0, 1, 0, 0);"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

	<div class="menu trans_800">
		<div class="menu_content d-flex flex-column align-items-center justify-content-center text-center">
			<ul>
				<li><a href="/">home</a></li>
				<li><a href="/lMenu">menu</a></li>
				<li><a href="/lContact">contact</a></li>
				<li><a href="/lAbout">about us</a></li>
			</ul>
		</div>
		<a href="/login">
		<div class="menu_reservations_phone ml-auto">LOGIN</div>
		</a>
	</div>
	
	@yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">

				<!-- Footer Logo -->
				<div class="col-lg-3 footer_col">
					<div class="footer_logo">
						<div class="footer_logo_title">Kopi Sawah</div>
						<div class="footer_logo_subtitle">Cafe & Resto</div>
					</div>
					<div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					<p style="line-height: 1.2;">Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></div>
				</div>

				<!-- Footer About -->
				<div class="col-lg-6 footer_col"></div>

				<!-- Footer Contact -->
				<div class="col-lg-3 footer_col">
					<div class="footer_contact">
						<ul>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Alamat :</div></div>
								<div class="footer_contact_text">Jl. Sawah Ombo, Kota Malang - Jawa Timur</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">Telpon :</div></div>
								<div class="footer_contact_text">+62 8523 7628 888</div>
							</li>
							<li class="d-flex flex-row align-items-start justify-content-start">
								<div><div class="footer_contact_title">E-Mail :</div></div>
								<div class="footer_contact_text">kop-saw@gmail.com</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<script src="{{asset('assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/css/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('assets/css/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('assets/plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('assets/plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('assets/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{asset('assets/plugins/easing/easing.js')}}"></script>
<script src="{{asset('assets/plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('assets/plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-datepicker/jquery-ui.js')}}"></script>
<script src="{{asset('assets/plugins/jquery-timepicker/jquery.timepicker.js')}}"></script>
<script src="{{asset('assets/js/custom.js')}}"></script>
</body>
</html>