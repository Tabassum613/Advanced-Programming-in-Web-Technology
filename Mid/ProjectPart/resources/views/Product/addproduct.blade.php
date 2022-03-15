@extends('layout.app')
@section('content')

   <br><br><h1>Add Product</h1><br> 

    <form action="{{route('addproduct')}}" class="form-group" method="post">
    {{csrf_field()}}

     <label for=""> <b>Product Name</b></label>
     <input type="text" name="name"  class="form-control">
     <span class="text-danger">@error('name') {{$message}} @enderror</span>
     <br> 

     <label for=""> <b>Product Weight</b> </label>
     <input type="number" name="weight"  class="form-control">
     <span class="text-danger">@error('weight') {{$message}} @enderror</span>
     <br>

     <label for=""> <b>Product Price</b> </label>
     <input type="number" name="price" class="form-control">
     <span class="text-danger">@error('price') {{$message}} @enderror</span>
     <br>

     
     
    <input type="submit" name="submit" class="btn btn-outline-primary" value="Add">
    </form>
    @endsection
