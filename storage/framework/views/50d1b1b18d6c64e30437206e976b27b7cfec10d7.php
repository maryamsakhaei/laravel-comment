 
<?php $__env->startSection('title'); ?>
    comment 
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <?php if(isset($details)): ?>
    <div class="row">
        <?php $__currentLoopData = $details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $model): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4">
            <br><br>
            <a href="<?php echo e(url('comment/'.$model->id)); ?>"><br>
            <img  src= "<?php echo e(url('public/images')); ?>/<?php echo e($model -> photo); ?> " class= "show-img" >
            </a>
            <br>
             
             <p  class="btn btn-secondary show-name"> مدل:<?php echo e($model -> model); ?></p><br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
 <?php endif; ?>
<?php $__env->stopSection(); ?>





<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>