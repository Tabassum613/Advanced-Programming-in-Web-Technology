@extends('layout.app')
@section('content')

<br><br><h1>Sign in</h1><br> 
    <form action="{{route('loginvendor')}}" class="form-group" method="post">
        
    <!-- Session -->

    @if(Session::has('Success'))
    <div class="alert alert-success">{{Session::get('Success')}}</div>
     @endif
     
     @if(Session::has('Fail'))
    <div class="alert alert-danger">{{Session::get('Fail')}}</div>
     @endif

    {{csrf_field()}}

     <label for=""> <b>Email</b> </label>
     <input type="text" name="email" placeholder="Name" value="{{old('email')}}" class="form-control">
     <span class="text-danger">@error('email') {{$message}} @enderror</span>
     <br>

     <label for=""> <b>Password</b></label>
     <input type="password" name="password" placeholder="Password" value="{{old('password')}}" class="form-control">
     <span class="text-danger">@error('password') {{$message}} @enderror</span>
     <br>

     
    <input type="submit" name="login" value="Log in" class="btn btn-outline-primary" >Create an Account? <a href="registration">Sign up </a>
    </form>         

						
@endsection



                             
				