
<title>Regisration</title>
<?php $__env->startSection('content'); ?>
	<h1>Create Account</h1>
	<form action="/createsubmit" method="POST">
		<?php echo csrf_field(); ?>
		 <div class="form-group">
	    <label for="email">Name:</label>
	    <input type="text" class="form-control" placeholder="Enter email" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="text" class="form-control" placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Submit</button>
</form>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\first\resources\views/create.blade.php ENDPATH**/ ?>