@extends('backend.master')
@section('title','index')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row">
	<h1>Cinema Form</h1>
</div>
<div class="card shadow">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold d-inline-block">Cinema List</h6>
		<a href="{{route('cinemas.create')}}" class="btn float-right"><i class="fas fa-plus"></i></a>
	</div>
	<div class="card-body">
		<table class="table table-bordered" cellspacing="0" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Township</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Township</th>
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody>
				@php $i=1; @endphp
				@foreach($cinemas as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->address}}</td>
					<td>{{$row->phone}}</td>
					<td>{{$row->township_id}}</td>
					<td>
						<a href="{{route('cinemas.edit',$row->id)}}" class="btn btn-warning float-left mx-3">Edit</a>
						<form method="POST" action="{{route('cinemas.destroy',$row->id)}}" onsubmit="return confirm('Are you sure want to delete')">
							@csrf <!-- because form -->
							@method('DELETE')
							<input type="submit" name="btndelete" class="btn btn-danger" value="Delete">
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
@endsection

@section('script')
<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
<script type="text/javascript" src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>
@endsection