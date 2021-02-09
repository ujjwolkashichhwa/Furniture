<?php $__env->startSection('content'); ?>
    <!-- Main body section -->
    <div class="container-fluid main" id="main">
        <div class="row">

            <!--filter section/ leftmost part --> 
            <div class="col-sm-3 left">
                <div class="card">
                    <div class="card-header">Quick Menu</div>
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-pills-lr-tab" data-toggle="pill" href="#v-pills-lr" role="tab" aria-controls="v-pills-lr" aria-selected="true">LivingRoom Furniture</a>
                            <a class="nav-link" id="v-pills-br-tab" data-toggle="pill" href="#v-pills-br" role="tab" aria-controls="v-pills-br" aria-selected="false">BedRoom Furniture</a>
                            <a class="nav-link" id="v-pills-dr-tab" data-toggle="pill" href="#v-pills-dr" role="tab" aria-controls="v-pills-dr" aria-selected="false">DiningRoom Furniture</a>
                            <a class="nav-link" id="v-pills-kr-tab" data-toggle="pill" href="#v-pills-kr" role="tab" aria-controls="v-pills-kr" aria-selected="false">KitchenRoom Furniture</a>
                            <a class="nav-link" id="v-pills-cr-tab" data-toggle="pill" href="#v-pills-cr" role="tab" aria-controls="v-pills-cr" aria-selected="false">ChildrenRoom Furniture</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content list section/ middle part -->
            <div class="col-sm-9 middle">
                <?php echo $__env->make('inc.message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                <!-- livingRoom furniture listing section -->
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-lr" role="tabpanel" aria-labelledby="v-pills-lr-tab">
                        <div class="row">
                            <?php if(count($furniture)>0 ): ?>
                                <?php $__currentLoopData = $furniture; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="col-sm-4 col-lg-3 col-md-6">
                                        <div class="thumbnail">
                                            <a href="product/<?php echo e($row->id); ?>">
                                                <img src="public/image/<?php echo e($row->image); ?>" class="img-fluid" alt="Responsive image"   />
                                            </a>
                                            <div class="caption">
                                                <h4 class="pull-right">Rs.<?php echo e($row->price); ?></h4>
                                                <h4><?php echo e($row->name); ?></h4>
                                                <p><?php echo e($row->detail); ?></p>
                                            </div>
                                            <div class="atc">
                                                <a href="<?php echo e(route('product.shoppingCart', ['id' => $row->id])); ?>" class="btn btn-success" style="width:100%;">
                                                        Add to Cart
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            <?php else: ?>
                                <p>Product(s) not found...</p>
                            <?php endif; ?>
                        
                        </div>
                    
                    </div>
                    <div class="tab-pane fade" id="v-pills-br" role="tabpanel" aria-labelledby="v-pills-br-tab">...saddasdsadsad</div>
                    <div class="tab-pane fade" id="v-pills-dr" role="tabpanel" aria-labelledby="v-pills-dr-tab">..wewqewqe.</div>
                    <div class="tab-pane fade" id="v-pills-kr" role="tabpanel" aria-labelledby="v-pills-kr-tab">..123213213.</div>
                    <div class="tab-pane fade" id="v-pills-cr" role="tabpanel" aria-labelledby="v-pills-cr-tab">..123213213.</div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/user/userProduct.blade.php ENDPATH**/ ?>