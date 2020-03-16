@extends('LandingPage.layout')

@section('content')
<!-- Home -->

	<div class="home">
		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="assets/images/assets/home.jpg" data-speed="0.8"></div>
		<div class="home_container">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="home_content text-center">
							<div class="home_subtitle page_subtitle">Kopi Sawah</div>
							<div class="home_title"><h1>Nanti Kita Ngobrol Sambil Ngopi</h1></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="scroll_icon"></div>
	</div>

	<!-- Intro -->

	<div class="intro">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="intro_content">
						<div class="intro_subtitle page_subtitle">Something different</div>
						<div class="intro_title"><h2>Peracikan Kopi oleh Barista handal</h2></div>
						<div class="intro_text">
							<p>Kopi yang telah lolos uji standarisasi akan diolah oleh Barista handal kita, dengan racikan yang sangat pas dan bisa disesuaikan oleh lidah orang indonesia. Yang pasti membutuhkan ketelitian dan kesabaran pada saat membuatnya. Tanpa mengurangi ke-higenisan kopi, para barista selalu mencuci tangan setiap 1 jam sekali agar menjaga tangan tetap steril pada saat membuatkan secangkir kopi untuk anda.</p>
						</div>
					</div>
					<div class="row">
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="assets/images/assets/intro_1.jpg" alt="https://unsplash.com/@quanle2819"></div>
						</div>
						<div class="col-xl-4 col-md-6 intro_col">
							<div class="intro_image"><img src="assets/images/assets/intro_2.jpg" alt="https://unsplash.com/@fabmag"></div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>

	<!-- Signature Coffe -->

	<div class="sig">
		<div class="sig_content_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="sig_content">
							<div class="sig_subtitle page_subtitle">Something new</div>
							<div class="sig_title"><h1>Our Signature Coffe</h1></div>
							<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							@foreach($fav as $f)
							<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
								
								<div class="sig_name">{{ $f->nama_barang }}</div>
								<div class="sig_price ml-auto">Rp. {{ $f->harga_jual }}</div>
								
							</div>
							@endforeach
							<div class="sig_content_list">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>100% coffe</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sig_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5">
						<div class="sig_image">
							<div class="background_image" style="background-image:url(assets/images/assets/liberica.jpg)"></div>
							<img src="{{asset('assets/images/assets/liberica.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Signature Food -->

	<div class="sig">
		<div class="sig_content_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7">
						<div class="sig_content">
							<div class="sig_subtitle page_subtitle">Something new</div>
							<div class="sig_title"><h1>Our Signature Food</h1></div>
							<div class="rating_r sig_rating rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
							@foreach($fav2 as $f)
							<div class="sig_name_container d-flex flex-row align-items-start justify-content-start">
								
								<div class="sig_name">{{ $f->nama_barang }}</div>
								<div class="sig_price ml-auto">Rp. {{ $f->harga_jual }}</div>
								
							</div>
							@endforeach
							<div class="sig_content_list">
								<ul class="d-flex flex-row align-items-center justify-content-start">
									<li>Rice</li>
									<li>Vegetable</li>
									<li>Saussage</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="sig_image_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 offset-lg-5">
						<div class="sig_image">
							<div class="background_image" style="background-image:url(assets/images/assets/nasgor.jpg)"></div>
							<img src="{{asset('assets/images/assets/nasgor.jpg')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- The Menu -->

	<div class="themenu">
		<div class="container">
			<div class="row">
				<div class="col">
					<div class="themenu_title_bar_container">
						<div class="themenu_stars text-center page_subtitle">Favourite</div>
						<div class="themenu_rating text-center">
							<div class="rating_r rating_r_5"><i></i><i></i><i></i><i></i><i></i></div>
						</div>
						<div class="themenu_title_bar d-flex flex-column align-items-center justify-content-center">
							<div class="themenu_title">Menu</div>
						</div>
					</div>
				</div>
			</div>
			<div class="row themenu_row">

				<!-- kopi -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Coffé</div>
						<div class="dish_list">

							<!-- kopi -->
							@foreach($drink as $dr)
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									
									<div class="dish_title">{{$dr->nama_barang}}</div>
									<div class="dish_price">Rp. {{$dr->harga_jual}}</div>
									
								</div>
								<hr>
							</div>
							@endforeach

						</div>
					</div>
				</div>

				<!-- Makanan -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Foods</div>
						<div class="dish_list">
							
							<!-- Makanan -->
							@foreach($food as $f)
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									
									<div class="dish_title">{{$f->nama_barang}}</div>
									<div class="dish_price">Rp. {{$f->harga_jual}}</div>
									
								</div>
								<hr>
							</div>
							@endforeach
						</div>
					</div>
				</div>

				<!-- Deserts -->
				<div class="col-lg-4 themenu_column">
					<div class="themenu_col">
						<div class="themenu_col_title">Deserts</div>
						<div class="dish_list">

							<!-- Dessert -->
							@foreach($dessert as $d)
							<div class="dish">
								<div class="dish_title_container d-flex flex-xl-row flex-column align-items-start justify-content-start">
									
									<div class="dish_title">{{$d->nama_barang}}</div>
									<div class="dish_price">Rp. {{$d->harga_jual}}</div>
									
								</div>
								<hr>
							</div>
							@endforeach

						</div>
					</div>
				</div>

			</div>
		</div>		
	</div>
	@stop