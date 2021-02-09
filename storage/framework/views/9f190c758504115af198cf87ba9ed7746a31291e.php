<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>Give Order of furniture</h1>

        <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <?php echo Form::open(['action' => 'HomeController@store', 'method' =>'post']); ?>

            <div class="form-group">
                <?php echo e(Form::label('username', 'Name of User')); ?>

                <?php echo e(form::text('username', '', ['class' =>'form-control', 'placeholder'=>'Enter Your Name'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('address', 'Address')); ?>

                <?php echo e(form::text('address', '', ['class' =>'form-control', 'placeholder'=>'Enter Address'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('contact', 'Contact')); ?>

                <?php echo e(form::text('contact', '', ['class' =>'form-control', 'placeholder'=>'Enter contact'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('name', 'Name of Furniture')); ?>

                <?php echo e(form::text('name', '', ['class' =>'form-control', 'placeholder'=>'Enter the name of Furniture'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('category', 'Category of Furniture')); ?>

                <br>
                <?php echo e(Form::select('category', ['living-room' => 'Living Room', 'dining-room' => 'Dining Room', 'kitchen-room'=> 'Kitchen Room', 'children-room' => 'Children Room', 'bed-room' => 'Bed Room'], ['class'=>'form-control'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('material', 'Material Used')); ?>

                <?php echo e(form::text('material', '', ['class' =>'form-control', 'placeholder'=>'Material Used'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('color', 'Color of Furniture')); ?>

                <?php echo e(form::text('color', '', ['class' =>'form-control', 'placeholder'=>'Enter the color of Furniture'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('dimension', 'Dimension of Furniture')); ?>

                <?php echo e(form::text('dimension', '', ['class' =>'form-control', 'placeholder'=>'Enter the Dimension of Furniture'])); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('detail', 'Other detail of Furniture')); ?>

                <?php echo e(form::textarea('detail', '', ['class' =>'form-control', 'placeholder'=>'Enter the other detail of Furniture'])); ?>

            </div>
            <?php echo e(form::submit('Submit', ['class' => 'btn btn-primary'])); ?>

            
        <?php echo Form::close(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/user/neworder.blade.php ENDPATH**/ ?>