<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
    
    </head>
    <body>

    <div style="margin:30px">
        <a class="btn btn-primary" href="<?php echo e(url('/product')); ?>" style="width:100px;">Back</a>
    </div>
    
    <div class="container-fluid" style="margin-top:50px">
        <div class="row">
            <div class="col-sm-5 detail-body">
                <img src="../public/image/<?php echo e($output->image); ?>" class="img-fluid block-100" alt="Responsive image" style="height:500px; width:500px;">
                <div class="atc">
                    <a href="<?php echo e(route('product.shoppingCart', ['id' => $output->id])); ?>" class="btn btn-success" style="width:100%; margin-top:40px;">
                        Add to Cart
                    </a>
                </div>
            </div>
            <div class="col-sm-5" style="margin-top:20px">
                <div class="card">
                    <div class="card-header">Detail of <?php echo e($output->name); ?></div>
                </div>
                <div class="card-body">
                    <table class="table" style="width:100%; ">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td><?php echo e($output->name); ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Material</th>
                                <td> <?php echo e($output->material); ?></td>
                            </tr>

                            <tr>
                                <th scope="row">Color</th>
                                <td><?php echo e($output->color); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Category</th>
                                <td><?php echo e($output->category); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Price</th>
                                <td>Rs.<?php echo e($output->price); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Brand</th>
                                <td><?php echo e($output->brand); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Dimension</th>
                                <td><?php echo e($output->dimension); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Created at</th>
                                <td><?php echo e($output->created_at); ?></td>
                            </tr>
                            <tr>
                                <th scope="row">Other Detail</th>
                                <td><?php echo e($output->detail); ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </div>
    </body>
</html><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/guest/detail.blade.php ENDPATH**/ ?>