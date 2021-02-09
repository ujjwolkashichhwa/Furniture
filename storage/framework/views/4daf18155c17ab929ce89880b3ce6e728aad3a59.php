<?php if(count($furniture)>0): ?>
                            <?php $__currentLoopData = $furniture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="col-sm-4 col-lg-4 col-md-4">
                                    <div class="thumbnail" style="height: 350px; width:300px;">
                                        <a href="welcome/<?php echo e($row->id); ?>">
                                            <img src="<?php echo e($row->image); ?>" style="height: 180px; width: 100%;"/>
                                        </a>
                                        <div class="caption">
                                            <h4 class="pull-right"><?php echo e($row->price); ?></h4>
                                            <h4><?php echo e($row->name); ?></h4>
                                            <p><?php echo e($row->detail); ?></p>
                                        </div>
                                        <div class="atc">
                                            <a href="" class="btn btn-success">
                                                    Add to Cart
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php else: ?>
                            <p>Product(s) not found...</p>
                        <?php endif; ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/welcome/index.blade.php ENDPATH**/ ?>