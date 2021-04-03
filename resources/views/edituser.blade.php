@extends('layout')
<title>Edit User</title>
@section('content')
	<h1>Edit User</h1>
	<form action="/updateuser" method="POST">
		@csrf
		 <div class="form-group">
		<input type="hidden" class="form-control" value="{{$data->id}}" name="id">
	    <label for="email">Name:</label>
	    <input type="text" class="form-control" value="{{$data->name}}" placeholder="Enter email" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="text" class="form-control" value="{{$data->email}}" placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="text" class="form-control" value="{{$data->password}}" placeholder="Enter password" id="pwd" name="password">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection




