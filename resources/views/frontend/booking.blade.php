@extends('frontend.master')

@section('content')
<div class="movie">
	<div class="row">
		<div class="col-lg-6">
			<h5>Movie  : </h5>
			<h5>Cinema Name : </h5>
		</div>
		<div class="row">
			<div class="custom-control custom-radio">
				<input type="radio" name="radioDisabled" id="customRadioDisabled2" class="custom-control-input" disabled>
				<label class="custom-control-label" for="customRadioDisabled2">9:00 AM to 10:30 AM</label>
			</div>
		</div>
	</div>
	<div class="move-container">
		<label>Seat Price:</label>
		<select id="movie"
		><option value="">Front : 2500 Ks</option>
		<option value="">Middle : 3500 Ks</option>
		<option value="">End : 4500 Ks</option>
		<option value="">Couple : 9000 Ks</option></select
		>
	</div>
	
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

	<div class="container">
		{{-- <div class="screen"></div> --}}
		{{-- <div class="front"> --}}
			@for($i=1;$i<=10;$i++)
			<div class="row">
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
			
		{{-- </div> --}}
	</div>
	
</div>

<p class="text">
	You have selected <span id="count">0</span> seat availables for the price of $<span
	id="total"
	>0</span
	>!
</p>
</div>
@endsection

