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
			<div class="col-lg-10 col-md-8 col-sm-8 dashboard-body">
				<h1>Welcome to Admin Dashboard</h1>

				<div class="row card-wrapper">
					<div class="col-sm-6" style="margin-top:40px;"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Number of User</h3>
								<h1><?php echo e($user); ?></h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6" style="margin-top:40px;"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Number of Furniture</h3>
								<h1><?php echo e($furniture); ?></h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6" style="margin-top:40px;"> 
						<div class="card">
							<div class="card-body">
								<h3>Total Purchased Furniture </h3>
								<h1><?php echo e($purchased); ?></h1>
							</div>	
						</div>
					</div>
					<div class="col-sm-6" style="margin-top:40px;"> 
						<div class="card">
							<div class="card-body">
								<h3>Total orderd Furniture </h3>
								<h1><?php echo e($order); ?></h1>
							</div>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>