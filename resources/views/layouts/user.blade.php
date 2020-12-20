<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="{{ asset('/assets/templateuser/img/logo.png')}}">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Sistem Pakar | Diagnosa Mandiri </title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/linearicons.css')}}">
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/font-awesome.min.css')}}">
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/bootstrap.css')}}">
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/magnific-popup.css')}}">				
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/owl.carousel.css')}}">
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/hexagons.min.css')}}">			
			<link rel="stylesheet" href="{{ asset('/assets/templateuser/css/main.css')}}">
			<link type="text/css" rel="stylesheet" href="{{ asset('/assets/templateuser/css/style.css')}}" />
			<script type="text/javascript" src="{{ asset('/assets/templateuser/js/jquery-1.8.2.min.js')}}"></script>
		

	</head>
			<header class="default-header">
				<nav class="navbar navbar-expand-lg  navbar-light">
					<div class="container">
						  <a class="navbar-brand" href="/">
						  	<img src="https://scontent.fcgk3-2.fna.fbcdn.net/v/t1.0-1/p240x240/51241372_103390730800254_6267916478251532288_n.jpg?_nc_cat=102&ccb=2&_nc_sid=dbb9e7&_nc_ohc=57oOALjDHGsAX9nVkyR&_nc_ht=scontent.fcgk3-2.fna&tp=6&oh=934b5e84376ec4b95d59746b4b0dfff6&oe=5FF57C27" alt="" style="width: 50px; height: 50px;">
						  </a> <span style="color: black; width: 300px; ">Diagnosa Mandiri</span>
						  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						    <span class="lnr lnr-menu"></span>
						  </button>

						  <div class="collapse navbar-collapse justify-content-end align-items-center" id="navbarSupportedContent">
						    <ul class="navbar-nav">
								<li><a href="/">Home</a></li>
								<li><a href="diagnosa">Diagnosa</a></li>
								<li><a href="{{ route('daftarpenyakit') }}">Info Penyakit</a></li>
								<li><a href="tentang">Tentang</a></li>				
								<li><a href="kontak">Kontak</a></li>

								@guest
								<li><a href="{{ route('login') }}">Login</a></li>
								
								@else
								<li><a href="{{ route('logout') }}">{{ Auth::user()->name }}, Logout</a>
								
                                        
								</li>
								@endguest
							</ul>
						  </div>						
					</div>
				</nav>
	</header>
			<!-- End Header Area -->		

			

	<body style="background-color: #42d1ff ">
			<div class="container">
				@yield('content')
			</div>
	</body>




<!-- start footer Area -->		
	<footer class="footer-area section-gap" style="padding: 10px;">
				<div class="container">
					

					<div class="row footer-bottom d-flex justify-content-between">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="col-lg-8 col-sm-12 footer-text m-0 text-white">&copy;<script>document.write(new Date().getFullYear());</script> Sistem Pakar Diagnosa Mandiri All rights reserved | Design by  <a href="https://colorlib.com" target="_blank">Colorlib</a></p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						<div class="col-lg-4 col-sm-12 footer-social">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
	</footer>
			<!-- End footer Area -->		

			<script src="{{asset('/assets/templateuser/js/vendor/jquery-2.2.4.min.js')}}"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
			<script src="{{asset('/assets/templateuser/js/vendor/bootstrap.min.js')}}"></script>
			<script src="{{asset('/assets/templateuser/js/jquery.ajaxchimp.min.js')}}"></script>
			<script src="{{asset('/assets/templateuser/js/jquery.magnific-popup.min.js')}}"></script>				
			<script src="{{asset('/assets/templateuser/js/parallax.min.js')}}"></script>			
			<script src="{{asset('/assets/templateuser/js/owl.carousel.min.js')}}"></script>			
			<script src="{{asset('/assets/templateuser/js/jquery.sticky.js')}}"></script>
			<script src="{{asset('/assets/templateuser/js/hexagons.min.js')}}"></script>
			<script src="{{asset('/assets/templateuser/js/jquery.counterup.min.js')}}"></script>
			<script src="{{asset('/assets/templateuser/js/waypoints.min.js')}}"></script>				
			<script src="{{asset('/assets/templateuser/js/main.js')}}"></script>	
		
	</html>				