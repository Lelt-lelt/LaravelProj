@extends('backend.master')
@section('title',' Edit')
@section('content')
<div class="row">
	<h1>Edit Form</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold d-inline-block">Edit Theater List</h6>
		<a href="{{route('theaters.index')}}" class="btn float-right"><i class="fas fa-backward"></i></a>
	</div>
	<div class="card-body">
		<form action="{{route('theaters.update',$theater->id)}}" method="POST" enctype="multipart/form-data">
			@csrf
			@method('PUT')
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Theater Name</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="Theater Name" name="name" required="required" value="{{$theater->name}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Maximum number of seat</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="No of seat" name="max" required="required" value="{{$theater->max_no_of_seat}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Screen Size</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="categoryName" placeholder="Screen size" name="screen" required="required" value="{{$theater->screen_size}}">
				</div>
			</div>
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Cinema Name</label>
				<div class="col-sm-10">
					<select class="custom-select" name="cname">
						<option selected>Cinema name</option>
						@foreach($cinema as $row)
						<option value="{{$row->id}}"
							@if($theater->cinema_id == $row->id) selected @endif
							>{{$row->name}}</option>
						@endforeach
					</select>
				</div>
			</div>
			<div class="form-group row">
				<div class="col-sm-2"></div>
				<div class="col-sm-10">
					<button type="submit" class="btn text-white">
						<i class="fa fa-save mx-2"></i>Save
					</button>
				</div>
			</div>
		</form>
	</div>
</div>

@endsection