@extends('frontend.master')

@section('content')
<div class="container justify-content-center align-items-center">
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-4"></div>
		<div class="col-lg-4 col-md-4 col-sm-4">
			<select id="movie" class="custom-select my-4">
				<option selected>Seat Price</option>
				<option value="16">Front : 2500 Ks</option>
				<option value="20">Middle : 3500 Ks</option>
				<option value="10">End : 4500 Ks</option>
				<option value="12">Couple : 9000 Ks</option>
			</select>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-4"></div>
	</div>
	<div class="row justify-content-center align-items-center">
		<ul class="showcase">
			<li>
				<div class="seat" style="background-color: green"></div>
				<small>Available</small>
			</li>
			<li>
				<div class="seat" style="background-color: red"></div>
				<small>Selected</small>
			</li>
			<li>
				<div class="seat"style="background-color: white"></div>
				<small>Occupied</small>
			</li>
		</ul>
	</div>
	<div class="row">
		<div class="col-lg-2 col-md-2 col-sm-2"></div>
		<div class="col-lg-8 col-md-8 col-sm-8">
			<div class="screen text-center">Screen</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2"></div>
	</div>
	@for($i=1; $i<=10; $i++)
	<div class="row" id="chair">
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
		<div class="seat available mx-2 my-2"></div>
	</div>
	@endfor
</div>

</div>
@endsection

