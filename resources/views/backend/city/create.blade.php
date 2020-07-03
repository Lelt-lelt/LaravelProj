@extends('backend.master')
@section('title',' Create')

@section('content')
<div class="row">
	<h1>Create Form</h1>
</div>
<div class="card shadow mb-4">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold d-inline-block">City New List</h6>
		<a href="{{route('cities.index')}}" class="btn float-right"><i class="fas fa-backward"></i></a>
	</div>
	<div class="card-body">
		
		<!-- <div class="alert alert-danger">
			<ul>
				
				<li></li>
				
			</ul>
		</div> -->
		
		<form action="{{route('cities.store')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group row">
				<label for="categoryName" class="col-sm-2 col-form-label">Name</label>
				<div class="col-sm-10">
					 <input type="text" class="form-control" id="categoryName" placeholder="City Name" name="name" required="required">
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