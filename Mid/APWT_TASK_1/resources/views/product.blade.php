@extends('layout.app')
@section('content')

<h1>
    <b>All available products are given below</b>
</h1>
@foreach($pro as $p)
 <li>{{$p}}</li>
@endforeach
@endsection