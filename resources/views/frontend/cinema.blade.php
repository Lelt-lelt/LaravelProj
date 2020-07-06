@extends('frontend.master')
@section('content')

<div class="container my-5" >
@foreach($cinemas as $row)
	<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">{{$row->name}}</h5>

    <p class="card-text">{{$row->address}}</p>
    <p class="card-text">{{$row->phone}}</p>
    <a href="{{route('theater',$row->id)}}" class="card-link"><button class="btn btn-primary">detail</button></a>
    
  </div>
</div>
@endforeach
</div>
@endsection