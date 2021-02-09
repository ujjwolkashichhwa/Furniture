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
                <h1>View the purchased Furnitures</h1>
                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="card">
                        <div class="card-header">
                            <strong>Name of client: <?php echo e($order->name); ?></strong><br>
                            <strong>Address of client: <?php echo e($order->address); ?></strong>
                        </div>
                        <div class="card-body">
                            <?php echo e($order->cart); ?>

                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/vieworder.blade.php ENDPATH**/ ?>