<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fulide  adminlogin">
         <div class="row adminlogin" >
                <div class="col-md-12">
                    <p class="word">خوش آمدید</p>
                    <br><br><br><br>
                </div> <!--wellcome -->
                <br><br><br><br>
                <div class= >
                    <div class="col-md-1"></div>
                    <div class="col-md-5">

                        <a href= "<?php echo e(url('viewuser')); ?>" class="viewproduct">برای نمایش کاربران کلیک کنید</a>
                    </div>
                    <div class="col-md-5 ">
                        <a href= "<?php echo e(url('viewproduct')); ?>" class="viewproduct">برای مشاهده محصولات کلیک کنید</p>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                    <div class="col-md-1"></div>
                </div>
        </div><!--row main-->
    </div><!--container-->

<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>