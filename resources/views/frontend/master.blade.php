<!DOCTYPE html>
<html>
<head>
	<title>Myanmar Cinema</title>

	<meta charset="utf-8">
	<meta name="viewpoint" content="width=device-width, initial-scale=1">
	<meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" type="text/css" href="https://mmwebfonts.comquas.com/fonts/?myanmar3/">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/bootstrap/css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/fontawesome/css/all.min.css')}}">

	<script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/jquery.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('frontendTemplate/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('frontendTemplate/style.css')}}">

	<link rel="stylesheet" href="{{asset('style.css')}}">

	<script type="text/javascript" src="{{asset('custom.js')}}"></script>

</head>
<body>
	<!-- navigation -->





<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
		<a class="navbar-brand" href="#"><img src="{{asset('frontendTemplate/images/logo.png')}}" class="img-fluid" style="height: 70px; width: 110px;"></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item mx-lg-3">
					<a class="nav-link" href="#movie">Movie</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#blog">Blog</a>
				</li>
				<li class="nav-item dropdown mx-lg-3">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Dropdown
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="#">Action</a>
						<a class="dropdown-item" href="#">Another action</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="#">Something else here</a>
					</div>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#about">About</a>
				</li>
			</ul>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href=""><i class="fas fa-user-alt mr-2"></i>Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

	@yield('content')
	<!-- footer -->
	<div class="container">
		<footer class="site-footer custom-border-top">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
						<h3 class="footer-heading mb-4">About Us</h3>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco.
						</p>
					</div>
					<div class="col-lg-5 ml-auto mb-5 mb-lg-0">
						<div class="row">
							<div class="col-md-12">
								<h3 class="footer-heading mb-4">Service</h3>
							</div>
							<div class="col-md-6 col-lg-4">
								<ul class="list-unstyled">
									<li>Booking 24hr/7</li>
									<li>Preview Movies</li>
									<li>Save Points</li>
									<li>Snack</li>
								</ul>
							</div>
							<div class="col-md-6 col-lg-4">
								<ul class="list-unstyled">
									<li>Latest Blog Post</li>
									<li>Easy Payment</li>
									<li>Q&A</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-lg-3">
						<div class="block-5 mb-5">
							<h3 class="footer-heading mb-4">Contact Info</h3>
							<ul class="list-unstyled" id="icon">
								<li class="address"><i class="fas fa-map-marker-alt mr-3"></i>Yangon, Myanmar</li>
								<li class="phone"><i class="fas fa-phone-alt mr-3"></i>+95 912345678</li>
								<li class="email"><i class="fas fa-envelope mr-3"></i>emailaddress@domain.com</li>
							</ul>
						</div>
					</div>
					<div class="col-12 my-5">
						<p class="text-center mb-0">
							Copyright &copy; All rights reserved | This template is made with <i class="fas fa-heart" style="color: #73AD4E;"></i> by Batch-15 Group-2
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>

</html>