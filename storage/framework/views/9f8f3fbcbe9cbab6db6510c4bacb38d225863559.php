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

				<?php if(count($furniture)>0): ?>
					<table class="table">
						<tr>
							<td>Name</td>
							<td>Category</td>
						</tr>

						<?php $__currentLoopData = $furniture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($row->name); ?></td>
								<td><?php echo e($row->category); ?></td>
								<td>
									<a href="editproduct/<?php echo e($row->id); ?>/edit" class="btn btn-warning">Edit</a>
								</td>
								<td>
									<?php echo Form::open(['action' => ['EditProductController@destroy', $row->id], 'method' =>'post']); ?>

										<?php echo e(form::hidden('_method', 'DELETE')); ?>

										<?php echo e(form::submit('Delete',['class' => 'btn btn-danger'])); ?>

									<?php echo Form::close(); ?>

								</td>
							</tr>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
					</table>
				<?php else: ?>
					<p>No product is Found</p>
				<?php endif; ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/editproduct.blade.php ENDPATH**/ ?>