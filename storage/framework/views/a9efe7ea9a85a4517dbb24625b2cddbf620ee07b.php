<?php $__env->startSection('content'); ?>
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-2 col-md-4 col-sm-4">
				<div class="card">
					<div class="card-body">
						<a href="<?php echo e(url('/dashboard')); ?>" class="nav-link">Dashboard</a>
						<a href="<?php echo e(url('/edituser')); ?>" class="nav-link">Manage Users</a>
						<a href="<?php echo e(url('/dashboard/create')); ?>" class="nav-link">New Product</a>
						<a href="<?php echo e(url('/editproduct')); ?>" class="nav-link">Edit product</a>
						<a href="<?php echo e(url('/vieworder')); ?>" class="nav-link">Orderd Purchased</a>
						<a href="<?php echo e(url('/neworder')); ?>" class="nav-link">Customer's Orders</a>
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-md-8 col-sm-8">
            
				<?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<h1>Edit User information</h1>
				<?php echo Form::open(['action' => ['UserController@update', $user->id], 'method' =>'post']); ?>

					<div class="form-group">
						<?php echo e(Form::label('name', 'Edit Name of User')); ?>

						<?php echo e(form::text('name', $user->name, ['class' =>'form-control', 'placeholder'=>'Enter the name of User'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('email', 'Edit Email of user')); ?>

						<?php echo e(form::email('email', $user->email, ['class' =>'form-control', 'placeholder'=>'Enter email'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('usertype', 'Edit usertype')); ?>

                        <br>
						<?php echo e(form::select('usertype', ['admin'=>'Admin', 'user'=>'User'])); ?>	
					</div>

                    <?php echo e(form::hidden('_method','PUT')); ?>


					<?php echo e(form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

					
				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/manageuser.blade.php ENDPATH**/ ?>