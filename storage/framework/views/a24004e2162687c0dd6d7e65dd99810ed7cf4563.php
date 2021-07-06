<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <form action="<?php echo e(route('image.upload.post')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>

        <div class="row">



            <div class="col-md-6">

                <input type="file" name="photo" class="form-control">

            </div>



            <div class="col-md-6">

                <button type="submit" class="btn btn-success">Upload</button>

            </div>



        </div>

    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>