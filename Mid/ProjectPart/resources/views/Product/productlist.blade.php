
@extends('layout.app')
@section('content')
   
      <table class="table table-hover">
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Weight</th>
            <th>Price</th>
            <th colspan=3>Action</th>
        </tr>
        
        @foreach($products as $p)
        <tr> 
            <td>{{$p->id}}</td>
            <td>{{$p->name}}</td>
            <td>{{$p->weight}}{{" kg"}}</td>
            <td>{{$p->price}}</td>

            <td><a href="#">Edit</a></td>
            <td><a href="#">Delete</a></td>
            <td><a href="#">Product Details</a></td>
        </tr>
        @endforeach


        </table>
    @endsection 