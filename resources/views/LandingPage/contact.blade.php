@extends('LandingPage.layout')

@section('content')

<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/assets/contact.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Kopi Sawah</div>
							<div class="home_title"><h1>Contact</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="contact_title">Contact info</div>
					<div class="contact_text">
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien. Suspendisse cursus faucibus finibus. Ut non justo eleifend, facilisis nibh ut, interdum odio. Suspendisse potenti.</p>
					</div>
					<div class="contact_logo_container">
						<div class="contact_logo_title">Kopi Sawah</div>
						<div class="contact_logo_subtitle">restaurant</div>
					</div>
				</div>
				<div class="col-xl-5 col-lg-6">
					<div class="contact_list_container d-flex flex-column align-items-lg-center justify-content-start">
						<div class="contact_list_content">
							<ul class="contact_list">
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Address</div></div>
									<div>1481 Creekside Lane Avila Beach, CA 931</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>Phone</div></div>
									<div>+53 345 7953 324</div>
								</li>
								<li class="d-flex flex-row align-items-start justify-content-start">
									<div><div>E-mail</div></div>
									<div>yourmail@gmail.com</div>
								</li>
							</ul>
							<div class="contact_social">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row google_map_row">
				<div class="col">
					
					<!-- Contact Map -->

					<div class="contact_map">

						<!-- Google Map -->
						
						<div class="map">
							<div id="google_map" class="google_map">
								<div class="map_container">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.6293975270655!2d112.62750171546585!3d-7.933718581208338!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd629e5b2074dc3%3A0x78b3eb6ee22a8148!2sKopi%20Sawah%20Malang!5e0!3m2!1sen!2sid!4v1583918796523!5m2!1sen!2sid" width="100%" height="100%" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
	</div>

@stop