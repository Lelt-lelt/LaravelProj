@extends('frontend.master')
@section('content')

<div class="container my-5" >
	<div class="row">
@foreach($theater as $row)
<div class="col-md-3 col-lg-3 mx-2">
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$row->name}}</h5>

    <p class="card-text">{{$row->max_no_of_seat}}</p>
    <p class="card-text">{{$row->cinema->name}}</p>
    <a href="{{route('')}}" class="card-link"><button class="btn btn-primary">detail</button></a>
    
  </div>
</div>
</div>
@endforeach
</div>
</div>
@endsection