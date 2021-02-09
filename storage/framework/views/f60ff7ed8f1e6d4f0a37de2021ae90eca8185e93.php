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
					</div>
				</div>
			</div>
			<div class="col-lg-10 col-md-8 col-sm-8">
            
				<?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				
				<h1>Edit information of  Furniture</h1>
				<?php echo Form::open(['action' => ['EditProductController@update', $furniture->id], 'method' =>'post']); ?>

					<div class="form-group">
						<?php echo e(Form::label('name', 'Edit Name of Furniture')); ?>

						<?php echo e(form::text('name', $furniture->name, ['class' =>'form-control', 'placeholder'=>'Enter the name of Furniture'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('price', 'Edit Price of Furniture')); ?>

						<?php echo e(form::number('price', $furniture->price, ['class' =>'form-control', 'placeholder'=>'Enter price of Furniture'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('category', 'Edit Category of Furniture')); ?>

						<br>
						<?php echo e(Form::select('category', ['living-room' => 'Living Room', 'dining-room' => 'Dining Room', 'kitchen-room'=> 'Kitchen Room', 'children-room' => 'Children Room', 'bed-room' => 'Bed Room'], ['class'=>'form-control'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('material', 'Edit Material Used')); ?>

						<?php echo e(form::text('material', $furniture->material, ['class' =>'form-control', 'placeholder'=>'Material Used'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('color', 'Edit Color of Furniture')); ?>

						<?php echo e(form::text('color', $furniture->color, ['class' =>'form-control', 'placeholder'=>'Enter the color of Furniture'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('dimension', 'Edit Dimension of Furniture')); ?>

						<?php echo e(form::text('dimension', $furniture->dimension, ['class' =>'form-control', 'placeholder'=>'Enter the Dimension of Furniture'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('brand', 'Edit Brand of Furniture')); ?>

						<?php echo e(form::text('brand', $furniture->brand, ['class' =>'form-control', 'placeholder'=>'Enter the brand of Furniture'])); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('image', 'Image of Furniture')); ?> <br>
						<?php echo e(form::file('image')); ?>

					</div>
					<div class="form-group">
						<?php echo e(Form::label('detail', 'Edit detail of Furniture')); ?>

						<?php echo e(form::textarea('detail', $furniture->detail, ['class' =>'form-control', 'placeholder'=>'Enter the other detail of Furniture'])); ?>

					</div>

                    <?php echo e(form::hidden('_method','PUT')); ?>


					<?php echo e(form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

					
				<?php echo Form::close(); ?>

			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/admin/edit.blade.php ENDPATH**/ ?>