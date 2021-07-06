<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fulide">
        <div class="row register" >
            <div class="col-md-6">
                <h1>ثبت نام</h1>
                <div>
                    <form action="store" method="get">
                        <?php echo csrf_field(); ?>
                            <input type="number" name="mobile" class="formStyle"placeholder="موبایل " required />
                            <input type="email" name="email" class="formStyle" placeholder="ایمیل " required />
                            <input type="password" name="password" class="formStyle" placeholder="رمز" required />
                            <button type="submit" name="btn" class="formStyle">ذخیره </button>
                    </form>
                    <?php if($errors->any()): ?>
                        <div class="alert alert-danger">
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="col-md-6"></div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>