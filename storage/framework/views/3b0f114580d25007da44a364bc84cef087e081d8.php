<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>OurFurniture</title>

    <!-- Scripts -->
    <script src="public/js/app.js" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="public/css/app.css" rel="stylesheet">
    <link href="public/css/carousel.css" rel="stylesheet">
    <link href="public/css/welcome.css" rel="stylesheet">
    <link href="public/css/footer.css" rel="stylesheet">
    <style>
        html{
            scroll-behavior: smooth;
        }
    </style>

</head>
<body>
    <div id="app" class="sticky-top">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?php echo e(url('/dashboard')); ?>">
                    <h3><b>OurFurniture</b></h3>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Authentication Links -->
                        <?php if(auth()->guard()->guest()): ?>
                            <li class="nav-item"><a class="btn btn-dark" href="<?php echo e(url('/')); ?>">Home</a></li>
                            <li class="nav-item"><a class="btn btn-dark" href="#about">About</a></li>
                            <li class="nav-item"><a class="btn btn-dark" href="#contact">Contact</a></li>
                            <li class="nav-item">
                                <a class="btn btn-dark" href="<?php echo e(route('product.addToCart')); ?>">Shopping Cart 
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                    <span class="badge"><?php echo e(Session::has('cart') ? Session::get('cart')->totalQty : ''); ?></span>
                                </a>
                            </li>
                            <li class="nav-item"><a class="btn btn-dark" href="<?php echo e(url('/product')); ?>">Product</a></li>
                            <li class="nav-item">
                                <a class="btn btn-dark" href="<?php echo e(route('login')); ?>">Login</a>
                            </li>
                        <?php else: ?>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <?php echo e(__('Logout')); ?>

                                    </a>

                                    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>
                                </div>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div>
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
   
</body>
</html>
<?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/layouts/admin/header.blade.php ENDPATH**/ ?>