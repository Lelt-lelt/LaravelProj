@extends('frontend.master')
@section('content')
<!--Carousel Wrapper-->
<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
	<!--Indicators-->
	<ol class="carousel-indicators">
		<li data-target="#video-carousel-example2" data-slide-to="0" class="active"></li>
		<li data-target="#video-carousel-example2" data-slide-to="1"></li>
		<li data-target="#video-carousel-example2" data-slide-to="2"></li>
	</ol>
	<!--/.Indicators-->
	<!--Slides-->
	<div class="carousel-inner" role="listbox">
		<!-- First slide -->
		<div class="carousel-item active">
			<!--Mask color-->
			<div class="view">
				<!--Video source-->
				<video class="video-fluid" autoplay loop muted>
					<source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
				</video>
				<div class="mask rgba-indigo-light"></div>
			</div>

			<!--Caption-->
			<div class="carousel-caption">
				<div class="animated fadeInDown">
					<h3 class="h3-responsive">Light mask</h3>
				</div>
			</div>
			<!--Caption-->
		</div>
		<!-- /.First slide -->
		<!-- Second slide -->
		<div class="carousel-item">
			<!--Mask color-->
			<div class="view">
				<!--Video source-->
				<video class="video-fluid" autoplay loop muted>
					<source src="https://mdbootstrap.com/images/video/Tropical.mp4" type="video/mp4" />
				</video>
				<div class="mask rgba-purple-slight"></div>
			</div>
			<!--Caption-->
			<div class="carousel-caption">
				<div class="animated fadeInDown">
					<h3 class="h3-responsive">Super light mask</h3>
				</div>
			</div>
			<!--Caption-->
		</div>
		<!-- /.Second slide -->
		<!-- Third slide -->
		<div class="carousel-item">
			<!--Mask color-->
			<div class="view">
				<!--Video source-->
				<video class="video-fluid" autoplay loop muted>
					<source src="https://mdbootstrap.com/img/video/Nature-Sunset.mp4" type="video/mp4" />
				</video>
				<div class="mask rgba-black-strong"></div>
			</div>
			<!--Caption-->
			<div class="carousel-caption">
				<div class="animated fadeInDown">
					<h3 class="h3-responsive">Strong mask</h3>
				</div>
			</div>
			<!--Caption-->
		</div>
		<!-- /.Third slide -->
	</div>
	<!--/.Slides-->
	<!--Controls-->
	<a class="carousel-control-prev" href="#video-carousel-example2" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next" href="#video-carousel-example2" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
	<!--/.Controls-->
</div>
<!--End Carousel Wrapper-->

<!-- Now Showing Movies-->
<div class="container my-5" id="movie"> 
	<div class="row mt-5">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h2 class="mt-5 text-center">Now Showing Movies</h2>
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
		<div class="col-lg-9 my-5" id="now">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!-- Button trigger modal -->
					<a data-toggle="modal" data-target="#exampleModalLong">
						<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
					</a>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<ul class="mt-5">
										<li>Showing Date : July 1 - July 7</li>
										<li>Cinema Place : All</li>
									</ul>
									<h5>Plot</h5>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h5>Casts</h5>
									<p>Chris Evans</p>
									<h5>Production</h5>
									<p> Artisan Entertainment </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Booking</button>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!-- Button trigger modal -->
					<a data-toggle="modal" data-target="#exampleModalLong">
						<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
					</a>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<ul class="mt-5">
										<li>Showing Date : July 1 - July 7</li>
										<li>Cinema Place : All</li>
									</ul>
									<h5>Plot</h5>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h5>Casts</h5>
									<p>Chris Evans</p>
									<h5>Production</h5>
									<p> Artisan Entertainment </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Booking</button>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
			<div class="row mt-4">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!-- Button trigger modal -->
					<a data-toggle="modal" data-target="#exampleModalLong">
						<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
					</a>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<ul class="mt-5">
										<li>Showing Date : July 1 - July 7</li>
										<li>Cinema Place : All</li>
									</ul>
									<h5>Plot</h5>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h5>Casts</h5>
									<p>Chris Evans</p>
									<h5>Production</h5>
									<p> Artisan Entertainment </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Booking</button>
								</div>
							</div>
						</div>
					</div>	
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<!-- Button trigger modal -->
					<a data-toggle="modal" data-target="#exampleModalLong">
						<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
					</a>

					<!-- Modal -->
					<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
								</div>
								<div class="modal-body">
									<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
									<ul class="mt-5">
										<li>Showing Date : July 1 - July 7</li>
										<li>Cinema Place : All</li>
									</ul>
									<h5>Plot</h5>
									<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
										tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
										quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
										consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
										cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
									<h5>Casts</h5>
									<p>Chris Evans</p>
									<h5>Production</h5>
									<p> Artisan Entertainment </p>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
									<button type="button" class="btn btn-primary">Booking</button>
								</div>
							</div>
						</div>
					</div>	
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Upcoming Movies -->
<div class="container-fluid" id="movieup">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<h2 class="my-5 text-center">Upcoming Movies</h2>
			</div>
		</div>
		<div class="row mb-5">		
			<div class="col-lg-4 col-md-4 col-sm-12 mb-5">
				<!-- Button trigger modal -->
				<a data-toggle="modal" data-target="#exampleModalLong">
					<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
				</a>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="mt-5">
									<li>Showing Date : July 1 - July 7</li>
									<li>Cinema Place : All</li>
								</ul>
								<h5>Plot</h5>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<h5>Casts</h5>
								<p>Chris Evans</p>
								<h5>Production</h5>
								<p> Artisan Entertainment </p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Booking</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 mb-5">
				<!-- Button trigger modal -->
				<a data-toggle="modal" data-target="#exampleModalLong">
					<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
				</a>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="mt-5">
									<li>Showing Date : July 1 - July 7</li>
									<li>Cinema Place : All</li>
								</ul>
								<h5>Plot</h5>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<h5>Casts</h5>
								<p>Chris Evans</p>
								<h5>Production</h5>
								<p> Artisan Entertainment </p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Booking</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 mb-5">
				<!-- Button trigger modal -->
				<a data-toggle="modal" data-target="#exampleModalLong">
					<img src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" class="img-fluid z-depth-1">
				</a>

				<!-- Modal -->
				<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
					<div class="modal-dialog" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h5 class="modal-title" id="exampleModalLongTitle">Captain America : Civil War</h5>
								<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
								</button>
							</div>
							<div class="modal-body">
								<iframe width="467" height="315" src="https://www.youtube.com/embed/dKrVegVI0Us" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
								<ul class="mt-5">
									<li>Showing Date : July 1 - July 7</li>
									<li>Cinema Place : All</li>
								</ul>
								<h5>Plot</h5>
								<p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								<h5>Casts</h5>
								<p>Chris Evans</p>
								<h5>Production</h5>
								<p> Artisan Entertainment </p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="button" class="btn btn-primary">Booking</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
		<div class="row mt-5"></div>
	</div>
</div>

<!-- Blog -->
<div class="container-fluid" id="blog">
	<div class="container">
		<div class="row my-4">
			<div class="col-lg-12 col-md-12 col-sm-12 text-center">
				<h2 class="mt-5 mb-4">Blog</h2>
				<p class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit,ipsum dolor sit amet, consectetur adipisicing elit <br> sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-center my-4">Oscar Awards</h5>
						<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title text-center my-4">Top 10 Action Movies</h5>
						<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
			<div class="col-lg-4 col-md-6 col-sm-12 mb-5">
				<div class="box shadow">
					<img src="{{asset('frontendTemplate/images/banner.jpeg')}}" class="card-img-top h" alt="...">
					<div class="card-body">
						<h5 class="card-title text-center my-4">Top Upcoming Movies</h5>
						<p class="card-text text-center">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>		

@endsection


