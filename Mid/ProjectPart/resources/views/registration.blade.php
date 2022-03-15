@extends('layout.app')
    @section('content')
   <br><br><h1>Sign up</h1><br> 
    <form action="{{route('registervendor')}}" class="form-group" method="post">
    
    <!-- Session -->

    @if(Session::has('Success'))
    <div class="alert alert-success">{{Session::get('Success')}}</div>
     @endif

     @if(Session::has('Fail'))
    <div class="alert alert-danger">{{Session::get('Fail')}}</div>
     @endif

    {{@csrf_field()}}


     <label for=""> <b> Name:</b></label>
     <input type="text" name="name" plaseholder="Name" value="{{old('name')}}" class="form-control">
     <span class="text-danger">@error('name') {{$message}} @enderror</span>
        <!-- @if($errors->has('name'))
        <span class="text-danger">@error('name') {{$message}} @enderror
        </span>
        @endif -->
     <br> 

     <label for=""> <b>Email:</b> </label>
     <input type="text" name="email" plaseholder="Email" value="{{old('email')}}" class="form-control">
     <span class="text-danger">@error('email') {{$message}} @enderror</span>
     <!-- @if($errors->has('email'))
        <span class="text-danger">
            {{$errors->first('email') }}
        </span>
        @endif -->
     <br>

     <label for=""> <b>Phone Number:</b> </label>
     <input type="number" name="number" plaseholder="Number" value="{{old('number')}}" class="form-control">
     <span class="text-danger">@error('number') {{$message}} @enderror</span>
     <!-- @if($errors->has('number'))
        <span class="text-danger">
            {{$errors->first('number') }}
        </span>
        @endif
     <br> -->
     <br>
     <label for=""> <b>Address:</b> </label>
     <input type="text" name="address" plaseholder="Address"  value="{{old('address')}}" class="form-control">
     <span class="text-danger">@error('address') {{$message}} @enderror</span>
     <!-- @if($errors->has('address'))
        <span class="text-danger">
            {{$errors->first('address') }}
        </span>
        @endif -->
     <br>

     <label for=""> <b>Password:</b> </label>
     <input type="password" name="password" plaseholder="Password" value="{{old('password')}}" class="form-control">
     <span class="text-danger">@error('password') {{$message}} @enderror</span>
     <!-- @if($errors->has('password'))
        <span class="text-danger">
            {{$errors->first('password') }}
        </span>
        @endif -->
     <br>

     
     
    <input type="submit" name="submit" value="Register" class="btn btn-outline-primary" >

    </form>
    @endsection