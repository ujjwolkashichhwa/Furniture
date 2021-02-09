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
                <h1>View New order of Furniture</h1>
                
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <tr>
                                    <th>Name of furniture</th>
                                    <th>Furniture Category</th>
                                    <th>Material To be used</th>
                                    <th>color</th>
                                    <th>Detail</th>
                                     <th>Name of user</th>
                                    <th>Address</th>
                                    <th>Contact</th> 
                                </tr>
                                <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($order->name); ?></td>
                                        <td><?php echo e($order->category); ?></td>
                                        <td><?php echo e($order->material); ?></td>
                                        <td><?php echo e($order->color); ?></td>
                                        <td><?php echo e($order->detail); ?></td>
                                        <td><?php echo e($order->username); ?></td>
                                        <td><?php echo e($order->address); ?></td>
                                        <td><?php echo e($order->contact); ?></td>
                                        <td>
                                            <?php echo Form::open(['action' => ['DashboardController@destroy', $order->id], 'method' =>'post']); ?>

                                                <?php echo e(form::hidden('_method', 'DELETE')); ?>

                                                <?php echo e(form::submit('Delete',['class' => 'btn btn-danger'])); ?>

                                            <?php echo Form::close(); ?>

                                        </td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/neworder.blade.php ENDPATH**/ ?>