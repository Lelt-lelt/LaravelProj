@extends('frontend.master')

@section('content')
<div class="container bg-dark">
  <div class="row my-5">
    <div class="col-2">
      
    </div>
    <div class="col-8">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/wTcNtgA6gHs" allowfullscreen></iframe>
    </div>
    </div>
    <div class="col-2"></div>
  </div>
  <div class="row">
    <div class="col-2">
      
    </div>
    <div class="col-8 bg-dark">
      <div class="row">
        <div class="col-4"><label for="name">Name</label></div>
        <div class="col-8">Black Dragon</div>
      </div>
      <div class="row">
        <div class="col-4"><label for="name">Description</label></div>
        <div class="col-8">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
      </div>
      <div class="row">
        <div class="col-4"><label for="name">Actor&Actress</label></div>
        <div class="col-8">Nay Htoo Naing</div>
      </div>
    </div>
    <div class="col-2"> 
    </div>
  </div>
  
    <div class="text-center my-5">
        <button type="button" class="btn btn-primary">booking</button>
     </div>
 
</div>
@endsection