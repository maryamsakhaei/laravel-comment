<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fulide">
        <div class="row product" >
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
        </div>
        <div class="row product" >
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
        </div>
        <div class="row product" >
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
            </div>
            <div class="col-md-4">
                <img  class="product-img" src="image/car.jpg">
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>