
    
    
    @extends('layout.app')
    @section('content')
   <br><br><h1>Add Product</h1><br> 
    <form action="{{route('productCreate')}}" class="form-group" method="post">
    {{csrf_field()}}
    

    <!-- <label for=""> <b>Upload The Photo</b></label>
    <input type="image" name="image"value="{{old('image')}}" class="form-control">
     
     <br>  -->


     <label for=""> <b>Product Name</b></label>
     <input type="text" name="name" value="{{old('name')}}" class="form-control">
     @if($errors->has('name'))
        <span class="text-danger">
            {{$errors->first('name') }}
        </span>
        @endif
     <br> 

     <label for=""> <b>Product Weight</b> </label>
     <input type="number" name="weight" value="{{old('weight')}}" class="form-control">
     @if($errors->has('weight'))
        <span class="text-danger">
            {{$errors->first('weight') }}
        </span>
        @endif
     <br>

     <label for=""> <b>Product Price</b> </label>
     <input type="number" name="price" value="{{old('price')}}" class="form-control">
     @if($errors->has('price'))
        <span class="text-danger">
            {{$errors->first('price') }}
        </span>
        @endif
     <br>

     
     
    <input type="submit" name="submit" class="btn btn-outline-primary" value="Add">
    </form>
    @endsection
