@extends('frontend.master')

@section('content')
<div class="movie">
	<div class="move-container">
		<label>Seat Price:</label>
		<select id="movie"
		><option value="16">Front : 2500 Ks</option>
		<option value="20">Middle : 3500 Ks</option>
		<option value="10">End : 4500 Ks</option>
		<option value="12">Couple : 9000 Ks</option></select
		>
	</div>

	<ul class="showcase">
		<li>
			<div class="seat"></div>
			<small>Available</small>
		</li>
		<li>
			<div class="seat selected"></div>
			<small>Selected</small>
		</li>
		<li>
			<div class="seat occupied"></div>
			<small>Occupied</small>
		</li>
	</ul>

	<div class="container">
		<div class="screen"></div>
		<div class="front">
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
		</div>
		
		<div class="middle">
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
		</div>
		
		<div class="back">
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
			<div class="row">
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
				<div class="seat"></div>
			</div>
		</div>
		
		<div class="couple">
			<div class="row">
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat"></div>
		</div>
		<div class="row">
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat mr-2"></div>
			<!-- <div class="seat"></div> -->
			<div class="seat"></div>
		</div>
		</div>
		
	</div>

	<p class="text">
		You have selected <span id="count">0</span> seats for the price of $<span
		id="total"
		>0</span
		>!
	</p>
</div>
@endsection

