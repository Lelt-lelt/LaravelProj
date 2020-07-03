@extends('backend.master')

@section('content')
	
<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<h1 class="h3 mb-2 text-gray-800 d-inline">Show Time</h1>
			<a href="{{route('showtimes.index')}}" class="float-right"><button class="btn btn-primary"><<</button></a>
		</div>
	</div>
</div>
<div class="card shadow">
	<div class="header">
		<h3>Create New Showtime</h3>
	</div>
	<div class="body">
		
		<form action="{{route('showtimes.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="showtime" class="col-sm-2 col-form-label">Show Time</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="showtime" placeholder="Enter Show time" name="showtime" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="noofseat" class="col-sm-2 col-form-label">No of seat</label>
			
				<div class="col-sm-10">
					<input type="number" class="form-control @error('name') is-invalid @enderror" id="noofseat" placeholder="Enter No of seat" name="noofseat" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="theaterName" class="col-sm-2 col-form-label">Theater Name</label>
					<div class="col-sm-10">
					<select class="form-control custom-select" name="theater">
						<option selected>Choose Theater</option>
							@foreach($theater as $row)
							<option value="{{$row->id}}">
								{{$row->name}}
							</option>
							@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="rundate" class="col-sm-2 col-form-label">Run Date</label>
					<div class="col-sm-10">
					<select class="form-control custom-select" name="rundate">
						<option selected>Choose Starting Date</option>
							@foreach($rundate as $row)
							<option value="{{$row->id}}">
								{{$row->starting_date}}
							</option>
							@endforeach
					</select>
					<select class="form-control custom-select" name="rundate">
						<option selected>Choose End Date</option>
							@foreach($rundate as $row)
							<option value="{{$row->id}}">
								{{$row->end_date}}
							</option>
							@endforeach
					</select>
				</div>
			</div>

			<div class="form-group row">
				<div class="col-sm-2">
					<div class="col-sm-10">
						<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>Save</button>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>



@endsection