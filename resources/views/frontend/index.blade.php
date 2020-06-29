@extends('frontend.master')
@section('content')
<!-- navigation -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="container">
		<a class="navbar-brand" href="#">Navbar</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mx-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Movie</a>
				</li>
				<li class="nav-item dropdown">
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
					<a class="nav-link" href="#">Contact</a>
				</li>
			</ul>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="#"><i class="fas fa-user-alt mr-2"></i>Login</a>
				</li>
			</ul>
		</div>
	</div>
</nav>

<!-- banner carousel -->
<div class="container-fluid">
	<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
			<li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="{{asset('frontendTemplate/images/banner2.jpeg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>First slide label</h5>
					<p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Second slide label</h5>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="{{asset('frontendTemplate/images/banner.jpg')}}" class="d-block w-100" alt="...">
				<div class="carousel-caption d-none d-md-block">
					<h5>Third slide label</h5>
					<p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
</div>

<!-- Now Showing Movies-->
<div class="container"> 
	<div class="row mt-5">
		<div class="col-3"></div>
		<div class="col-lg-4 col-md-12 col-sm-12 text-md-center text-sm-center text-lg-left">
			<h2 class="mt-5">Now Showing Movies</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-12 col-sm-12 my-5">
			<select class="custom-select mb-2">
				<option selected>Township</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
			<select class="custom-select">
				<option selected>Cinema</option>
				<option value="1">One</option>
				<option value="2">Two</option>
				<option value="3">Three</option>
			</select>
		</div>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 my-5">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-5">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-5">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-5">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Upcoming Movies -->
<div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-4 col-md-12 col-sm-12 text-md-center text-sm-center text-lg-left">
			<h2 class="my-5">Upcoming Movies</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-12 col-sm-12 my-3">
			<div>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat.</p>
			</div>
		</div>
		<div class="col-lg-9">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-12 my-3">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-3">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-3">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
				<div class="col-lg-3 col-md-6 col-sm-12 my-3">
					<img src="{{asset('frontendTemplate/images/poster.jpeg')}}" class="img-fluid">
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Blog -->
<div class="container-fluid bg-dark">
	<div class="container">
	<div class="row my-5">
		<div class="col-lg-12 col-md-12 col-sm-12 text-center">
			<h2 class="mt-5">Blog</h2>
		</div>
	</div>
	<div class="row mt-5">
		<div class="col-lg-6 col-md-6 col-sm-12 mb-5">
			<div class="card">
				<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" style="height: 200px;" class="card-img-top h" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 mb-5">
			<div class="card">
				<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" style="height: 200px;" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12 mb-5">
			<div class="card">
				<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" style="height: 200px;" class="card-img-top h" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12 mb-5">
			<div class="card">
				<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" style="height: 200px;" alt="...">
				<div class="card-body">
					<h5 class="card-title">Card title</h5>
					<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

@endsection