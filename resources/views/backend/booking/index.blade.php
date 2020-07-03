@extends('backend.master')
@section('title','City')

@section('style')
<link rel="stylesheet" type="text/css" href="{{asset('backendtemplate/vendor/datatables/dataTables.bootstrap4.min.css')}}">
@endsection
@section('content')
<div class="row">
	<h1>Booking</h1>
</div>
<div class="card shadow">
	<div class="card-header py-3">
		<h6 class="m-0 font-weight-bold d-inline-block">Booking</h6>
		<a href="{{route('bookings.create')}}" class="btn float-right"><i class="fas fa-plus"></i></a>
	</div>
	<div class="card-body">
		<table class="table table-bordered" cellspacing="0" id="dataTable">
			<thead>
				<tr>
					<th>No</th>
					<th>Number of tickets</th>
					<th>Total</th>
					<th>Showtime</th>
					<th>User Name</th>
				</tr>
			</thead>
			<tfoot>
				<tr>
					<th>No</th>
					<th>Number of tickets</th>
					<th>Total</th>
					<th>Showtime</th>
					<th>User Name</th>
				</tr>
			</tfoot>
			<tbody>
				@php $i=1; @endphp
				@foreach($bookings as $row)
				<tr>
					<td>{{$i++}}</td>
					<td>{{$row->no_of_ticket}}</td>
					<td>{{$row->total}}</td>
					<td>{{$row->showtime_id}}</td>
					<td>{{$row->user->name}}</td>
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