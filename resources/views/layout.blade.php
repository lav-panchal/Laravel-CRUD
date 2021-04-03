<html>
<head>
	<script src="{{asset('js/app.js')}}"></script>
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<body>


	<div class="header">
	@section('header')
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <button class="navbar-toggler btn-primary" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div>
			  	<img src="https://upload.wikimedia.org/wikipedia/commons/d/df/Img_logo_blue.jpg" height="50" width="90" style=" margin-right: 20px;">
			  </div>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <ul class="navbar-nav ml-auto">
			    	<li class="nav-item">
			        <a class="nav-link" href="/">Home</a>
			      </li>
			    	
			      <li class="nav-item 	">
			        <a class="nav-link" href="list">User List </a>
			      </li>
			       <li class="nav-item">
			        <a class="nav-link" href="login">Login</a>
			      </li>
			      {{-- <li class="nav-item">
			        <a class="nav-link" href="create">Create Account</a>
			      </li> --}}
			    </ul>
			  <a class="nav-link" href="logout">
			        	<button class="btn btn-primary">Logout</button>
			        </a>
			  </div>
			</nav>

	@show
	</div>

	<div class="content">
	@section('content')
		
	@show
	</div>

	<div class="footer">
	@section('footer')
		<h6>Copyright @ 2021</h6>
	@show
	</div>

</body>
</html>