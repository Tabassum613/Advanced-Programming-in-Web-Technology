@extends('layout.app')
@section('content')
<h1> <b>Contact Us</b></h1>

<form action="{{route('contact')}}" class="form-group" method="post">
    {{csrf_field()}}
     <label for=""> <b>Name:</b> </label>  
     <input type="text" name="name" value="{{old('name')}}" class="form-control">
     @if($errors->has('name'))
        <span class="text-danger">
            <strong>{{$errors->first('name') }}</strong>
        </span>
        @endif
        <br> 


     <label for=""> <b>Email:</b> </label>
     <input type="text" name="email" value="{{old('email')}}" class="form-control">
     @if($errors->has('email'))
        <span class="text-danger" >
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
        <br>



     <label for=""> <b>Phone Number:</b> </label>
     <input type="number" name="number" value="{{old('number')}}" class="form-control">
     @if($errors->has('number'))
        <span class="text-danger" >
            <strong>{{$errors->first('number') }}</strong>
        </span>
        @endif
     <br>
     
     <label for=""> <b>Message:</b> </label>
     <textarea name="message" value="{{old('message')}}" cols="30" rows="3" class="form-control"></textarea >
     @if($errors->has('message'))
        <span class="text-danger">
            <strong>{{$errors->first('message') }}</strong>
        </span>
        @endif
        <br>


    <input type="submit" name="submit" class="btn btn-outline-primary">
    </form>
@endsection
