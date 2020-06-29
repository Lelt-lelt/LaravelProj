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

</head>
<body>
	@yield('content')
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
								<li class="phone"><i class="fas fa-phone-alt mr-3"></i>+2 392 3929 210</li>
								<li class="email"><i class="fas fa-envelope mr-3"></i>emailaddress@domain.com</li>
							</ul>
						</div>
					</div>
					<div class="col-12 my-5">
						<p class="text-center mb-0">
							Copyright &copy; All rights reserved | This template is made with <i class="fas fa-heart"></i> by Batch-15 Group-2
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
</body>
</html>