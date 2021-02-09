<?php $__env->startSection('content'); ?>
    <div class="container">
        <?php if(Session::has('cart')): ?>
            <div class="row">
                <div class="col-sm-6">
                    <table class="table">
                        <tr>
                            <th>Name of Furniture</th>
                            <th>Quantity of Furniture</th>
                            <th>Price of Furniture</th>
                        </tr>   
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($product['item']['name']); ?></td>
                                <td><?php echo e($product['qty']); ?></td>
                                <td>Rs. <?php echo e($product['price']); ?></td>
                               
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <strong>Total: <?php echo e($totalPrice); ?></strong>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <a href="<?php echo e(route('checkout')); ?>" type="button" class="btn btn-primary">Checkout</a>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-sm-6">
                    <h2>No Items in Cart</h2>
                </div>
            </div>
        <?php endif; ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/guest/shopping-cart.blade.php ENDPATH**/ ?>