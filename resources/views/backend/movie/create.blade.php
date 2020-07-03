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
		<h3>Create New Movie</h3>
	</div>
	<form action="{{route('movies.store')}}" method="post" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="moviename" class="col-sm-2 col-form-label">Movie Name</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="moviename" placeholder="Enter movie name" name="name" >
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
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="actorName" placeholder="Enter Actor name" name="actor" >
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
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="runtime" placeholder="Enter movie RunTime" name="runtime" >
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
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="description" placeholder="Enter movie Description" name="description" >
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
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="rating" placeholder="Enter movie rating" name="rating" >
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
@endsection