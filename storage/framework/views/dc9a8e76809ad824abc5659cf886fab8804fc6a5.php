<?php $__env->startSection('content'); ?>

    <!-- Carousel section -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100 image-fluid" src="public/image/1.jfif" >
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                        <h1 style="font-size:5vw;">Welcome to online furniture shopping platform <b>OurFurniture</b></h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="#nav2">Get Started</a>
                        </button>
                        <button type="button" class="btn btn-outline-success">
                            <a href="<?php echo e(route('login')); ?>">Login/Signup</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image-fluid" src="public/image/2.jfif" >
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                        <h1 style="font-size:5vw;">Want to see more about us?</h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="#">About us</a>
                        </button>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100 image-fluid" src="public/image/4.jfif">
                <div class="overlay">
                    <div class="carousel-caption d-md-block">
                    <h1 style="font-size:5vw;">Have any query and want to contact directly?</h1>
                        <button type="button" class="btn btn-outline-success">
                            <a class="link" href="#">Contact</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    
    <!-- navbar section for selecting furnitures accoring to requirement -->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" id="nav2">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar2" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="<?php echo e(__('Toggle navigation')); ?>">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar2">
                <ul class="navbar-nav justify-content-center " id="navbar21">
                    <li class="nav-item"><a class="nav-link" href="#">LivingRoom Furniture <label>LR</label></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">BedRoom Furniture <label>BR</label></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">DiningRoom Furniture <label>DR</label></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">KitchenRoom Furniture <label>KR</label></a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Children Furniture <label>CR </label></a></li>               
                </ul>
            </div>
        </div>
    </nav>
    
    <!-- Main body section -->
    <div class="container-fluid main">
        <div class="row">

            <!--filter section/ leftmost part -->
            <div class="col-sm-2 left">
                <p>This is left most part of main body</p>
            </div>

            <!-- Content list section/ middle part -->
            <div class="col-sm-8 middle">
                <!-- livingRoom furniture listing section -->
                <div class="middle1 bg-dark">
                    <h3>Living Room Furniture</h3>
                </div>
                <div class="middle2">

                </div>

                <!-- BedRoom Furniture listing section -->
                <div class="middle1 bg-dark">
                    <h3>Bed Room Furniture</h3>
                </div>
                <div class="middle2">

                </div>

                <!-- Dining Room Furniture listing section -->
                <div class="middle1 bg-dark">
                    <h3>Dining Room Furniture</h3>
                </div>
                <div class="middle2">

                </div>

                <!-- Kitchen Room Furniture listing section -->
                <div class="middle1 bg-dark">
                    <h3>Kitchen Room Furniture</h3>
                </div>
                <div class="middle2">

                </div>

                <!-- children Room Furniture listing section -->
                <div class="middle1 bg-dark">
                    <h3>Children Room Furniture</h3>
                </div>
                <div class="middle2">

                </div>

            </div>

            <!-- Rightmost part -->
            <div class="col-sm-2 right">
                <p>This is the rightmost part of the main body</p>
            </div>
        
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\OurFurniture\resources\views/welcome.blade.php ENDPATH**/ ?>