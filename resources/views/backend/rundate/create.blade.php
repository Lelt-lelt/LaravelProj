@extends('backend.master')

@section('content')
	
<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<h1 class="h3 mb-2 text-gray-800 d-inline">Run Date</h1>
			<a href="{{route('rundates.index')}}" class="float-right"><button class="btn btn-primary"><<</button></a>
		</div>
	</div>
</div>
<div class="card shadow">
	<div class="header">
		<h3>Create New Run Date</h3>
	</div>
	<div class="body">
		
		<form action="{{route('rundates.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="startingdate" class="col-sm-2 col-form-label">Starting Date</label>
			
				<div class="col-sm-10">
					<input type="date" class="form-control @error('name') is-invalid @enderror" id="rundateName" placeholder="Enter starting date" name="startingdate" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="enddate" class="col-sm-2 col-form-label">End Date</label>
			
				<div class="col-sm-10">
					<input type="date" class="form-control @error('name') is-invalid @enderror" id="rundateName" placeholder="Enter end date" name="enddate" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="cinemaName" class="col-sm-2 col-form-label">Cinema Name</label>
					<div class="col-sm-10">
					<select class="form-control custom-select" name="cinema">
						<option selected>Choose Cinema</option>
							@foreach($cinema as $row)
							<option value="{{$row->id}}">
								{{$row->name}}
							</option>
							@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="movieName" class="col-sm-2 col-form-label">Movie Name</label>
					<div class="col-sm-10">
					<select class="form-control custom-select" name="movie">
						<option selected>Choose Movie</option>
							@foreach($movie as $row)
							<option value="{{$row->id}}">
								{{$row->name}}
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