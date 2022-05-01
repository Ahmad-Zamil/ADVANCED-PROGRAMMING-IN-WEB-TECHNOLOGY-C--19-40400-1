@extends('layouts.app')
@section('content')
    <h1>Welcome To Our Website</h1>

    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{URL('image/6.jpg')}}" alt="First slide" height="750" width="150">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/7.jpg')}}" alt="Second slide" height="750" width="150">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{URL('image/8.jpg')}}" alt="Third slide" height="750" width="150">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a><br>
</div>
@endsection
