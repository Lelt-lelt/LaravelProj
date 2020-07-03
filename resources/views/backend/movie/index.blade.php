@extends('backend.master')
@section('style')
	<link rel="stylesheet" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection

@section('content')
	<div class="container">
	<div class="row mb-3">
		<div class="col-12">
			<h1 class="h3 mb-2 text-gray-800 d-inline">Movie</h1>
			<a href="{{route('movies.create')}}" class="float-right"><button class="btn btn-primary">>></button></a>
		</div>
	</div>
</div>

	<table cellpadding="15" cellspacing="10" border="0" id="dataTable" class="table">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Actor</th>
				<th>Run time</th>
				<th>Description</th>
				<th>Rating</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp

			@foreach ($movies as $row)
			<tr>
				<th>{{$i++}}</th>
				<td>{{$row->name}}</td>
				{{-- <td><img src="{{asset($row->photo)}}" alt="" class="" style="width:100px;height:50px;"></td> --}}
				<td>{{$row->actor}}</td>
				<td>{{$row->runtime}}</td>
				<td>{{$row->description}}</td>
				<td>{{$row->rating}}</td>
				<td>
					<a href="{{route('movies.edit',$row->id)}}" class="btn btn-warning float-left mx-2">Edit </a>
					<form action="{{route('movies.destroy',$row->id)}}" method="post" onsubmit="return confirm('Are u sure')">
						@csrf
						@method('DELETE')
						<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
					</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
@endsection
@section('script')
	 <script src="{{asset('backendtemplate/vendor/datatables/jquery.dataTables.min.js')}}"></script>
	 <script src="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>
	 <script src="{{asset('backendtemplate/js/demo/datatables-demo.js')}}"></script>

@endsection
