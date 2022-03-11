@extends('layout.app')
@section('content')

<br><br><h1>Log in</h1><br> 
    <form action="{{route('login')}}" class="form-group" method="post">
    {{csrf_field()}}

     <label for=""> <b>Email:</b> </label>
     <input type="text" name="email" value="{{old('email')}}" class="form-control">
     @if($errors->has('email'))
        <span class="text-danger">
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
		<br>

     <label for=""> <b>Password:</b></label>
     <input type="password" name="password" value="{{old('password')}}" class="form-control">
     @if($errors->has('password'))
        <span class="text-danger">
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
		<br>

     
    <input type="submit" name="login" class="btn btn-outline-primary" >Create Account? <a href="registration">Sign Up </a>
    </form>         

						
@endsection



                             
				