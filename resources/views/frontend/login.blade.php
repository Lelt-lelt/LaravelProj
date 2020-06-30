@extends('frontend.master')
@section('content')
<div class="container">
	<div class="row text-center">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<h2 class="my-5">LOGIN OR REGISTER</h2>
		</div>
	</div>
	<div class="row my-5">
		<div class="col-lg-6 col-md-12 col-sm-12">
			<form>
				<p>ALREADY ONE OF US?</p>
				<p>15% OFF for your First Purchase [Membership Only]</p>
				<div class="form-group mt-5">
					<label for="exampleInputEmail1">Email address <sup><i class="fas fa-star-of-life text-danger"></i></sup></label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password <sup><i class="fas fa-star-of-life text-danger"></i></sup></label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-outline-success my-4 float-right">LOG IN</button>
			</form>
		</div>
		<div class="col-lg-6 col-md-12 col-sm-12">
			<form>
				<p>FIRST TIME HERE?</p>
				<p>Registration only 10 Seconds done!</p>
				<div class="form-group mt-5">
					<label for="exampleInputEmail1">Email address <sup><i class="fas fa-star-of-life text-danger"></i></sup></label>
					<input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
					<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Password <sup><i class="fas fa-star-of-life text-danger"></i></sup></label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<div class="form-group">
					<label for="exampleInputPassword1">Comfirm Password <sup><i class="fas fa-star-of-life text-danger"></i></sup></label>
					<input type="password" class="form-control" id="exampleInputPassword1">
				</div>
				<button type="submit" class="btn btn-outline-success my-4 float-right">REGISTER</button>
			</form>
		</div>
	</div>
</div>
<div class="my-5">
	<hr id="divider">
</div>
@endsection