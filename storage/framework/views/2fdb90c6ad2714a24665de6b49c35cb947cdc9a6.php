
<title>Edit User</title>
<?php $__env->startSection('content'); ?>
	<h1>Edit User</h1>
	<form action="/updateuser" method="POST">
		<?php echo csrf_field(); ?>
		 <div class="form-group">
		<input type="hidden" class="form-control" value="<?php echo e($data->id); ?>" name="id">
	    <label for="email">Name:</label>
	    <input type="text" class="form-control" value="<?php echo e($data->name); ?>" placeholder="Enter email" id="name" name="name">
	  </div>
	  <div class="form-group">
	    <label for="email">Email address:</label>
	    <input type="text" class="form-control" value="<?php echo e($data->email); ?>" placeholder="Enter email" id="email" name="email">
	  </div>
	  <div class="form-group">
	    <label for="pwd">Password:</label>
	    <input type="text" class="form-control" value="<?php echo e($data->password); ?>" placeholder="Enter password" id="pwd" name="password">
	  </div>
	 
	  <button type="submit" class="btn btn-primary">Update</button>
</form>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\first\resources\views/edituser.blade.php ENDPATH**/ ?>