@extends('backend.master')
@section('title',' Edit')
@section('content')
<div class="row">
	<h1>Edit Form</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold d-inline-block">Edit Cinema List</h6>
		<a href="{{route('cinemas.index')}}" class="btn btn btn-outline-info float-right"><i class="fas fa-backward"></i></a>
	</div>
	<div class="card-body">
		<form action="{{route('cinemas.update',$cinema->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="name" required="" value="{{$cinema->name}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Address</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="address" required="" value="{{$cinema->address}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Phone</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="Category Name" name="phone" required="" value="{{$cinema->phone}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Township</label>
				<div class="col-sm-10">
					<select class="custom-select" name="tname">
						<option selected>Select Township</option>
						@foreach($township as $row)
						<option value="{{$row->id}}"
							@if($cinema->township_id == $row->id) selected @endif
							>{{$row->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<button type="submit" class="btn text-white">
						<i class="fa fa-save mx-2"></i>Update
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection