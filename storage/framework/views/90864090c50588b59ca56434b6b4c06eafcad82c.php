<?php $__env->startSection('content'); ?>
    <div class="container">
        <h1>My orders history</h1>
        
        <?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="panel-body">
                    <ul class="list-group">
                        <?php $__currentLoopData = $order->cart->items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-group-item">
                                <span class="badge"><?php echo e($item['price']); ?></span>
                                <?php echo e($item['item']['name']); ?> | <?php echo e($item['qty']); ?> units
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
                <div class="panel-footer">
                    <strong>Total Price: Rs. <?php echo e($order->cart->totalPrice); ?></strong>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/user/orderhistory.blade.php ENDPATH**/ ?>