@extends('backend.master')
@section('title','index')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
<div class="row">
	<h1>Theater Form</h1>
</div>
<div class="card shadow">
	<div class="card-header">
		<h6 class="m-0 font-weight-bold d-inline-block">Theater List</h6>
		<a href="{{route('theaters.create')}}" class="btn float-right"><i class="fas fa-plus"></i></a>
	</div>
	<div class="card-body">
		<table class="table table-bordered" cellspacing="0" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Maximum number of seat</th>
					<th>Screen Size</th>
					<th>Cinema Name</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Name</th>
					<th>Maximum number of seat</th>
					<th>Screen Size</th>
					<th>Cinema Name</th>
					<th>Actions</th>
				</tr>
			</tfoot>
			<tbody>
				@php $i=1; @endphp
				@foreach($theaters as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->name}}</td>
					<td>{{$row->max_no_of_seat}}</td>
					<td>{{$row->screen_size}}</td>
					<td>{{$row->cinema->name}}</td>
					<td>
						<a href="{{route('theaters.edit',$row->id)}}" class="btn float-left mx-3 text-white">Edit</a>
						<form method="POST" action="{{route('theaters.destroy',$row->id)}}" onsubmit="return confirm('Are you sure want to delete')">
							@csrf <!-- because form -->
							@method('DELETE')
							<input type="submit" name="btndelete" class="btn text-white" value="Delete">
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