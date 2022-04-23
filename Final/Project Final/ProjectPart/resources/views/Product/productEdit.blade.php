@extends('layout.app')
@section('content')

   <br><br><h1>Edit Product</h1><br> 

    <form action="{{route('productEdit')}}" class="form-group" method="post">
    {{csrf_field()}}


    <label for=""> <b>ID</b></label>
    <input type="text" name="id" value="{{$product->id}}"  class="form-control" readonly>
    <span class="text-danger">@error('id') {{$message}} @enderror</span>
    <br> 
    
     <label for=""> <b>Product Name</b></label>
     <input type="text" name="name" value="{{$product->name}}"  class="form-control">
     <span class="text-danger">@error('name') {{$message}} @enderror</span>
     <br> 

     <label for=""> <b>Product Weight</b> </label>
     <input type="number" name="weight" value="{{$product->weight}}"  class="form-control">
     <span class="text-danger">@error('weight') {{$message}} @enderror</span>
     <br>

     <label for=""> <b>Product Price</b> </label>
     <input type="number" name="price" value="{{$product->price}}" class="form-control">
     <span class="text-danger">@error('price') {{$message}} @enderror</span>
     <br>

     
     
    <input type="submit" name="submit" class="btn btn-primary" value="Submit">
    </form>
    @endsection