@extends('backend.master')

@section('content')
	
<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<h1 class="h3 mb-2 text-gray-800 d-inline">Township</h1>
			<a href="{{route('townships.create')}}" class="float-right"><button class="btn btn-primary"><<</button></a>
		</div>
	</div>
</div>
<div class="card shadow">
	<div class="header">
		<h3>Edit Township</h3>
	</div>
	<div class="body">
		
		<form action="{{route('townships.update',$township->id)}}" method="post" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="townshipName" class="col-sm-2 col-form-label">Name</label>
			
				<div class="col-sm-10">
					<input type="text" class="form-control @error('name') is-invalid @enderror" id="townshipName" placeholder="Enter township name" name="name" value="{{$township->name}}" >
					@error('name')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				
			</div>
			<div class="form-group row">
				<label for="cityName" class="col-sm-2 col-form-label">City Name</label>
					<div class="col-sm-10">
					<select class="form-control custom-select" name="city">
						<option selected>Choose City</option>
							@foreach($city as $row)
							<option value="{{$row->id}}"
								@if($row->id==$township->city_id)
								selected
							@endif 
								>	{{$row->name}}
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