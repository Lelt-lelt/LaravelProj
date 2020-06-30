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
<!--Carousel Wrapper-->
<div class="container"> 

<!-- Now Showing Movies-->
<div class="container" id="movie"> 
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
		<div class="col-lg-9 my-5">
			<div class="row">

  {{--  Grid column --}}
  <div class="col-lg-6 col-md-12 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/A3PDXmYoF5U"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-1.jpg" alt="video"
        data-toggle="modal" data-target="#modal1"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-6 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal6" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-2.jpg" alt="video"
        data-toggle="modal" data-target="#modal6"></a>

  </div>
  <!-- Grid column -->

  <!-- Grid column -->
  <div class="col-lg-6 col-md-6 mb-4">

    <!--Modal: Name-->
    <div class="modal fade" id="modal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">

        <!--Content-->
        <div class="modal-content">

          <!--Body-->
          <div class="modal-body mb-0 p-0">

            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vlDzYIIOYmM"
                allowfullscreen></iframe>
            </div>

          </div>

          <!--Footer-->
          <div class="modal-footer justify-content-center">
            <span class="mr-4">Spread the word!</span>
            <a type="button" class="btn-floating btn-sm btn-fb"><i class="fab fa-facebook-f"></i></a>
            <!--Twitter-->
            <a type="button" class="btn-floating btn-sm btn-tw"><i class="fab fa-twitter"></i></a>
            <!--Google +-->
            <a type="button" class="btn-floating btn-sm btn-gplus"><i class="fab fa-google-plus-g"></i></a>
            <!--Linkedin-->
            <a type="button" class="btn-floating btn-sm btn-ins"><i class="fab fa-linkedin-in"></i></a>

            <button type="button" class="btn btn-outline-primary btn-rounded btn-md ml-4" data-dismiss="modal">Close</button>

          </div>

        </div>
        <!--/.Content-->

      </div>
    </div>
    <!--Modal: Name-->

    <a><img class="img-fluid z-depth-1" src="https://mdbootstrap.com/img/screens/yt/screen-video-3.jpg" alt="video"
        data-toggle="modal" data-target="#modal4"></a>

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
</div>

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


