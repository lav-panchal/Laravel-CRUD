
<title>Login</title>

<?php $__env->startSection('content'); ?>
	


	<div class="row">
		<div class="col-lg-9">
			<h1>Login Page</h1> 
	<form action="/loginsubmit" method="POST">
		<?php echo csrf_field(); ?>
	  <div class="form-group ">
	    <label for="email">Email address:</label>
	    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Submit</button>

	</form>
	</div>
		<div class="col=lg-3">
			<a class="nav-link" href="create"><button class="btn btn-primary ml-auto " style="font-size: 25px; margin-top: 25px;">Create Account</button></a>
		</div>
	</div>




<?php $__env->stopSection(); ?>



<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\first\resources\views/login.blade.php ENDPATH**/ ?>