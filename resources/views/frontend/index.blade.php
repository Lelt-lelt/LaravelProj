@extends('frontend.master')
@section('content')

<!-- Now Showing Movies-->
<!-- <div class="container" id="movie"> 
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
</div> -->

<!-- Upcoming Movies -->
<!-- <div class="container">
	<div class="row">
		<div class="col-3"></div>
		<div class="col-lg-4 col-md-12 col-sm-12 text-md-center text-sm-center text-lg-left">
			<h2 class="my-5">Upcoming Movies</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-3 col-md-12 col-sm-12 my-3">
			<div class="box">
				<p class="pt-2 px-3">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
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
</div> -->

<!-- Blog -->
<div class="container-fluid" id="blog">
	<div class="container">
		<div class="row my-5">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center">
				<h2 class="mt-5">Blog</h2>
			</div>
		</div>
		<div class="row my-5">
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top h" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top h" alt="...">
					<div class="card-body">
						<h5 class="card-title">Card title</h5>
						<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-3 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" alt="...">
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

</body>
</html>
