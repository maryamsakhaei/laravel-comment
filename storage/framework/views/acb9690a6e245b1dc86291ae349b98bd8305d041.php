<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
<form id="file-upload-form" class="uploader" action="<?php echo e(url('save')); ?>" method="post" accept-charset="utf-8" enctype="multipart/form-data">
    <?php echo csrf_field(); ?>
    <input id="file-upload" type="file" name="fileUpload" accept="image/*" onchange="readURL(this);">
    <label for="file-upload" id="file-drag">
        <img id="file-image" src="#" alt="Preview" class="hidden">
        <div id="start" >
            <i class="fa fa-download" aria-hidden="true"></i>
            <div>Select a file or drag here</div>
            <div id="notimage" class="hidden">Please select an image</div>
            <span id="file-upload-btn" class="btn btn-primary">Select a file</span>
            <br>
            <span class="text-danger"><?php echo e($errors->first('fileUpload')); ?></span>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
    </label>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>