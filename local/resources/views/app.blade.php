<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lala</title>
	<link rel="stylesheet" type="text/css" href="./local/resources/assets/css/main.css">
	<link rel="stylesheet" type="text/css" href="./local/resources/assets/css/home.css">
	<link rel="stylesheet" href="./local/resources/assets/fonts/font-awesome/css/font-awesome.min.css">
	<script src='https://code.jquery.com/jquery-3.1.1.min.js'></script>
	<script src='./local/resources/assets/js/home.js'></script>
</head>
<body>
	<header >
		<img src="./local/resources/assets/img/home-panda-logo.png">
		<ul>
			<li>
				<a href="#onama">O Nama</a>
				<div class="grey-underline"></div>
			</li>
			<li>
				<a href="#proizvod">Proizvodi</a>
				<div class="grey-underline"></div>
			</li>
			<li>
				<a href="#contact">Kontakt</a>
				<div class="grey-underline"></div>

			</li>
		</ul>
	</header>

	@yield('content')

  	<footer>
  		<div class="container">
			<div class="contact">
			 	<h3>Želite da poslujete sa nama?</h3>
			 	<div class="info">
					<h5>infolala@yahoo.com</h5>
					<h5>Srbija</h5>
					<h5>115 Highbury New Park</h5>
					<h5>+381 65 333 33 33</h5>
				</div>
			</div>
  		</div>
  		<div class="copyright">Copyright © 2017</div>
	</footer>
</body>
</html>
