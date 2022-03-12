@extends('layout.app')
@section('content')
<br>
<h1 align='center'> <b>Contact Us</b> </h1>
<br><br>
<h6>Please call us at 10001 at any time.</h6>
<br>
<h6>Alternatively, you can use the form below to send us a message. Within 48 hours, you'll get a response from a real person with a real name.</h6>
<br>
<h2>Contact Us</h2>
<br>
<form action="{{route('contact')}}" class="form-group" method="post">
    {{csrf_field()}}
     <label for=""> <b>Name</b> </label>  
     <input type="text" name="name" value="{{old('name')}}" class="form-control">
     @if($errors->has('name'))
        <span class="text-danger">
           {{$errors->first('name') }}
        </span>
        @endif
        <br> 


     <label for=""> <b>Email</b> </label>
     <input type="text" name="email" value="{{old('email')}}" class="form-control">
     @if($errors->has('email'))
        <span class="text-danger" >
            {{$errors->first('email') }}</strong>
        </span>
        @endif
        <br>



     <label for=""> <b>Phone Number</b> </label>
     <input type="number" name="number" value="{{old('number')}}" class="form-control">
     @if($errors->has('number'))
        <span class="text-danger" >
            {{$errors->first('number') }}</strong>
        </span>
        @endif
     <br>
     
     <label for=""> <b>Message</b> </label>
     <textarea name="message" value="{{old('message')}}" cols="30" rows="3" class="form-control"></textarea >
     @if($errors->has('message'))
        <span class="text-danger">
            {{$errors->first('message') }}</strong>
        </span>
        @endif
        <br>


    <input type="submit" name="submit" class="btn btn-outline-primary">
    </form>


@endsection