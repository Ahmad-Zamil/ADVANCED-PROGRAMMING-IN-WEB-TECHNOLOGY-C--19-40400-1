@extends('layouts.app')
@section('content')

<h1>OUR PRODUCT DETAILS</h1>


<div class="container">
  <div class="row">
    <div class="col-sm">
    <div class="card" style="width: 18rem; background-color:  #1B9A47">
  <img class="card-img-top" src="{{URL('image/5.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><h2> {{$name}}</h2>
                         <h2> {{$id}}</h2>
                         <h2> {{$exp}}</h2></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div><br>
    </div>


    <div class="col-sm">
    <div class="card" style="width: 18rem; background-color:  #1B9A47">
  <img class="card-img-top" src="{{URL('image/5.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><h2> {{$name}}</h2>
                         <h2> {{$id}}</h2>
                         <h2> {{$exp}}</h2></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>


    <div class="col-sm">
      <div class="card" style="width: 18rem; background-color:  #1B9A47">
  <img class="card-img-top" src="{{URL('image/5.jpg')}}" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text"><h2> {{$name}}</h2>
                         <h2> {{$id}}</h2>
                         <h2> {{$exp}}</h2></p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
    </div>
    </div>
  </div>
</div>


<ul>

</ul>



@endsection
