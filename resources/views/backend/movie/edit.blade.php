@extends('backend.master')

@section('content')
	
<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<h1 class="h3 mb-2 text-gray-800 d-inline">Movie</h1>
			<a href="{{route('movies.index')}}" class="float-right"><button class="btn btn-primary"><<</button></a>
		</div>
	</div>
</div>
<div class="card shadow">
	<div class="header">
		<h3>Edit Movie</h3>
	</div>
	<div class="body">
		<form action="{{route('movies.update',$movie->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="movieName" class="col-sm-2 col-form-label">Name</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="movieName" placeholder="Enter Movie Name" name="name" value="{{$movie->name}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="actorName" class="col-sm-2 col-form-label">Actor</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="actorName" placeholder="Enter Actor Name" name="actor" value="{{$movie->actor}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				
			</div>
			<div class="form-group row">
				<label for="runtime" class="col-sm-2 col-form-label">Run Time</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="runtimeName" placeholder="Enter movie Run Time" name="runtime" value="{{$movie->runtime}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				
			</div>
			<div class="form-group row">
				<label for="description" class="col-sm-2 col-form-label">Description</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="description" placeholder="Enter Description" name="description" value="{{$movie->description}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
			</div>
			<div class="form-group row">
				<label for="rating" class="col-sm-2 col-form-label">Rating</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="rating" placeholder="Enter Rating" name="rating" value="{{$movie->rating}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
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