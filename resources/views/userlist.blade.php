@extends('layout')
<title>User List</title>
@section('content')
	<h1>Userlist</h1>
	<div>
		<table border="4" style="font-size: 20px; text-align: center;">
				<tr>
					<th>ID</th>
					<th>Name</th>
					<th>E-mail</th>
					<th>Password</th>
					<th>Edit</th>
					<th>Delete</th>
				</tr>
			@foreach ($user as $u)

				<tr>
					<td style="width: 40; height: 40;">{{$u->id}}</td>
					<td style="width: 160;">{{$u->name}}</td>
					<td style="width: 350;">{{$u->email}}</td>
					<td style="width: 200;">{{$u->password}}</td>
					<td style="width: 100;"><a href="/edituser/{{$u->id}}"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue;"></i></a></td>
					<td style="width: 100;"><a href="/deleteuser/{{$u->id}}"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a></td>
				</tr>
			@endforeach
		</table>


	</div>
	
@endsection



