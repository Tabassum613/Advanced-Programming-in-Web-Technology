@extends('layout.app')
@section('content')

<br>
<h1>Welcome to dashboard</h1>

<br><br>
<h3><b>Name &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :  {{$data->name}}</b></h3>
<h3><b>Email &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp:  {{$data->email}}</b></h3>
<h3><b>Phone Number  :  {{$data->number}}</b></h3>
<h3><b>Address &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp :  {{$data->address}}</b></h3>
<input type="submit" name="submit" value="Edit Profile" class="btn btn-primary">&nbsp &nbsp<input type="submit" name="submit" value="Logout" class="btn btn-primary" >

@endsection





