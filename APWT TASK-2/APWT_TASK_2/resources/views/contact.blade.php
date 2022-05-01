@extends('layouts.app')
@section('content')
    <h1>Contact Us</h1>
    <h2>Address : Khilgaon,Dhaka</h2>
    <h2>Phone : 01234 567890</h2>

    <form action="{{route('contact')}}"  method="post" style ="border-style: solid">
        {{csrf_field()}}
        
        <div class="col-md-4 form-group">
            <span><b>Name</b></span>
            <input type="text" name="name" value="{{old('name')}}" class="form-control">
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span><b>Email</b></span>
            <input type="text" name="email" value="{{old('email')}}"class="form-control">
            @error('email')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>
        <div class="col-md-4 form-group">
            <span><b>Phone</b></span>
            <input type="text" name="phone" value="{{old('phone')}}"class="form-control">
            @error('phone')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div><br>
        <div class="col-md-4 form-group">
            <span><b>Message</b></span>
            <input type="text" name="message" value="{{old('message')}}"class="form-control">
            @error('message')
                <span class="text-danger">{{$message}}</span>
            @enderror
        </div>

        <br>
        
        <input type="submit" class="btn btn-primary" value="Submit" >
    </form>
@endsection
