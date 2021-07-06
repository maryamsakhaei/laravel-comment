<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
     <div class="container-fulide">
         <div class="row adminlogin" >
                <div class="col-md-12">
                    <p class="viewproduct"> Product List </p>
                    <br><br><br><br>
                </div> <!--wellcome -->
                  <!--=========================نمایش  نام.ایمیل.موبایل====================-->
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser">product_id</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser model">Photo</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
                <br>
<!--=========================نمایش محصولات============================================-->
                <div class="row" >
                    <?php $__currentLoopData = $product_id; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-6 details">
                        <?php echo e($product -> product_id); ?>

                        <hr>
                    </div>
                     <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-6 details">
                    <?php echo e($product -> photo); ?>

                        <hr>
                    </div>
                    <!-- <div class="col-md-3 details"></div>  -->
                     <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

<!--===========================قسمت اضافه کردن محصول==================================-->
<br><br>
        <div class="row">
        <p class="addproducttxt">با توجه به محصول اطلاعات زیر را کامل کنید
        </p>
        </div>
<!--=======================================================================================-->

     <div class="row">
        <form action="insert_product" method="POST" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
    <div class="col-md-4">
        <br><br><br><br>
        <span class="texts">upload-image: </span><input type="file" name="photo" value="" class="space"><br>        </div><!--row4-->
        <div class="col-md-4">
        <br>
        <span class="texts">product_id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="product_id" value="" class="space"> <br>
        <span class="texts">نام&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
        <input type="text" name="name" value="" class="space"> <br>
        <span class="texts">متغیر اول را وارد کنید&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="variable1" value="" class="space"> <br>
         <span class="texts">متغیر دوم را وارد کنید&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="variable2" value="" class="space"> <br>
        <span class="texts">متغیر سوم را وارد کنید&nbsp;&nbsp;</span> <input type="text" name="variable3" value="" class="space"><br>
        <span class="texts">متغیر چهارم را وارد کنید&nbsp;</span><input type="text" name="variable4" value="" class="space"><br>
        <span class="texts">متغیر پنجم را وارد کنید&nbsp;</span> <input type="text" name="variable5" value="" class="space"><br>
        <span class="texts">متغیر ششم را وارد کنید </span> <input type="text" name="variable6" value="" class="space"><br>
        </div><!--row4-->
        <div class="col-md-4">
            <br>
        <span class="texts">نقاط مثبت </span>
            <textarea id="w3mission" rows="4" cols="50" class="space" name="possetive_point"></textarea><br>
            <span class="texts"> نقاط منفی </span>
            <textarea id="w3mission" rows="4" cols="50"  class="space" name="negative_point"></textarea>
        </div><!--row4-->
        <button type="submit" name="btn" class="btnproduct">send </button>
        </form>
    </div><!-- row-add-product-->
    <a href= "<?php echo e(url('admin')); ?>" class="viewproduct"> صفحه اصلی</a>
    <br><br><br><br><br><br><br><br><br><br><br><br>
<!--===========================قسمت اضافه کردن محصول==================================-->
     </div><!--main row-->
    </div><!--container-->
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>