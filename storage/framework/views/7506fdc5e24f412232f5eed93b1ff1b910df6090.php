
<title>User List</title>
<?php $__env->startSection('content'); ?>
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
			<?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $u): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

				<tr>
					<td style="width: 40; height: 40;"><?php echo e($u->id); ?></td>
					<td style="width: 160;"><?php echo e($u->name); ?></td>
					<td style="width: 350;"><?php echo e($u->email); ?></td>
					<td style="width: 200;"><?php echo e($u->password); ?></td>
					<td style="width: 100;"><a href="/edituser/<?php echo e($u->id); ?>"><i class="fa fa-pencil-square-o" aria-hidden="true" style="color:blue;"></i></a></td>
					<td style="width: 100;"><a href="/deleteuser/<?php echo e($u->id); ?>"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a></td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</table>


	</div>
	
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Laravel\first\resources\views/userlist.blade.php ENDPATH**/ ?>