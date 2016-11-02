@extends('app')


@section('content')
	<div class="cover-img">
			<img src="./local/resources/assets/img/cover3.jpg">
	</div>	
	<!-- pocinje about us el -->
	<div class="about-us">
		<div class="box">
			<h2>O Nama</h2>
			<div class="text">
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</h5>				
			</div>
			<div class="text">
				<h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</h5>				
			</div>
		</div>
	</div>
	<!--zavrsava se about us el  -->
	<!-- pocinje product el  -->
	<div class="product-element">
		<div class="img-container">	
			<div class="opacity"></div>	
			<img src="./local/resources/assets/img/oil2.jpg">
			<div class="product-title">
				<h2>Suncokretovo ulje</h2>
				<h6>Vise o proizvodu</h6>
				<button><!-- <i class="fa fa-sort-desc" aria-hidden="true"></i> --><i class="fa fa-angle-down" aria-hidden="true"></i></button>
				<h6 class="img-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
				</h6>
			</div>
		</div>	
	</div>
	<!-- zavrsava product el -->
	<!-- ovde pocinje sl el -->
	<div class="sl-box">
		<p class="text">We are a global design and technology consultancy.</p>
		<div class="rw-box container">
			<div class="cl one">
				<div class="box">
					<h4>
						<i class="fa fa-check-circle-o" aria-hidden="true"></i>
						Kvalitet
					</h4>
					<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
				</div>
			</div>
			<div class="cl two">
				<div class="box">
					<h4>
						<i class="fa fa-tint" aria-hidden="true"></i>
						Prirodno
					</h4>
					<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
				</div>
			</div>
			<div class="cl three">
				<div class="box">
					<h4>
						<i class="fa fa-line-chart" aria-hidden="true"></i>
						Sertifikati
					</h4>
					<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
				</div>
			</div>
			<div class="cl four">
				<div class="box">
					<h4>
						<i class="fa fa-certificate" aria-hidden="true"></i>
						Iskustvo
					</h4>
					<h6>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</h6>
				</div>
			</div>
		</div>
	</div>
	<!-- ppocinje product2 el -->
	<div class="product-element">	
		<div class="img-container">
			<div class="opacity"></div>	
			<img src="./local/resources/assets/img/seeds.jpg">
		</div>
	</div>
	<!-- zavrsava se product el -->
	
@endsection
