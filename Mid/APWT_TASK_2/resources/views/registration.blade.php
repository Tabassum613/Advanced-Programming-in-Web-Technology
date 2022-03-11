
    
    
    @extends('layout.app')
    @section('content')
   <br><br><h1>Registration</h1><br> 
    <form action="{{route('registration')}}" class="form-group" method="post">
    {{csrf_field()}}


     <label for=""> <b> Name:</b></label>
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
        <span class="text-danger">
            <strong>{{$errors->first('email') }}</strong>
        </span>
        @endif
     <br>

     <label for=""> <b>Password:</b> </label>
     <input type="password" name="password" value="{{old('password')}}" class="form-control">
     @if($errors->has('password'))
        <span class="text-danger">
            <strong>{{$errors->first('password') }}</strong>
        </span>
        @endif
     <br>

     <label for=""> <b>Phone Number:</b> </label>
     <input type="number" name="number" value="{{old('number')}}" value="{{old('number')}}" class="form-control">
     @if($errors->has('number'))
        <span class="text-danger">
            <strong>{{$errors->first('number') }}</strong>
        </span>
        @endif
        <br>
     
    <input type="submit" name="submit" class="btn btn-outline-primary">
    </form>
    @endsection



    

                   