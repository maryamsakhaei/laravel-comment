<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
     <div class="container-fulide">
         <div class="row adminlogin" >  
                <div class="col-md-12">
                    <p class="viewproduct"> لیست کاربران  </p>
                    <br><br><br><br>
                </div> <!--wellcome -->
                  <!--=========================نمایش  نام.ایمیل.موبایل====================-->
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser">نام</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser model">ایمیل</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
                <br>
               <!--=========================نمایش کاربران====================-->
                <div class="row" >
                    <?php $__currentLoopData = $name; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-6 details">
                        <?php echo e($model -> name); ?>

                        <hr>
                    </div>
                     <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-6 details">
                    <?php echo e($model -> email); ?>

                        <hr>
                    </div>
                    <!-- <div class="col-md-3 details"></div>  -->
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <br><br>
                <a href= "<?php echo e(url('admin')); ?>" class="viewproduct">صفحه اصلی</a>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     </div><!--main row-->
    </div><!--container-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>