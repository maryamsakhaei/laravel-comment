<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fulide">
        <div class="row adminlogin" >
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>

            <div class="col-md-3 login-form">
                <div>
                    <form action="<?php echo e(url('check')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                            <input type="number" name="mobile" class="formStyles"placeholder="موبایل " required />
                            <input type="email" name="email" class="formStyles"placeholder="ایمیل " required />
                            <button type="submit" name="btn" class="formStyles">ارسال </button>
                    </form>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br>
            <div class="col-md-3"></div>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>