 
<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    <div class="container-fulid">
        <div class="row product" >
             <div class="col-md-4">
             <img class="show-img" src=<?php echo e(url('public/images')); ?>/<?php echo e($product -> photo); ?>>
            </div><!--row4-->
            <div class="col-md-4">
            <span class="texts"></span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> name); ?>" class="space" disabled><br>
                <span class="texts"></span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> variable1); ?>" class="space" disabled><br>
                <span class="texts"></span> &nbsp;<input type="text" name="material" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> variable2); ?>" class="space" disabled><br>
                <span class="texts"> </span> &nbsp;<input type="text" name="price" value="&nbsp;&nbsp;&nbsp;<?php echo e($product ->variable3); ?>" class="space" disabled><br>
                <span class="texts"></span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> variable4); ?>" class="space" disabled><br>
                <span class="texts"></span> &nbsp;<input type="text" name="material" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> variable5); ?>" class="space" disabled><br>
            </div><!--row4-->
            <div class="col-md-4">
                <br>
                <span class="texts">  </span>
                <textarea id="w3mission" rows="4" cols="50" class="space" name="possetive" disabled>&nbsp;&nbsp;&nbsp;<?php echo e($product -> possetive_point); ?></textarea><br>
                <span class="texts"></span>
                <textarea id="w3mission" rows="4" cols="50" disabled>&nbsp;&nbsp;&nbsp;<?php echo e($product-> negative_point); ?></textarea>
                <br><br>
            </div><!--row4-->
<!--====================================نمایش نظرات کاربران==========================-->
<div class="row">
    <?php $__currentLoopData = $usercomments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usercomment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="col-md-12">
       <br> <br> <br>
       <input type="text" name="price" value="<?php echo e($usercomment-> name); ?>" class="user-name">&nbsp;&nbsp;&nbsp;<span class="gofte">:</span><br>
    <img  src= "<?php echo e(url('public/profile')); ?>/<?php echo e($usercomment->personal_photo); ?>" class="usercomment-img">
   </div>
    <div class="row ">
       <div class="col-md-1"></div>
       <div class="col-md-6  border-text">
<br>
        <span class=""> &nbsp;من از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> variable1); ?>&nbsp;عدد&nbsp;<?php echo e($usercomment -> variable1); ?>&nbsp;را اختصاص میدهم</span>/
        <span class=""> &nbsp;و از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> variable2); ?>&nbsp;عدد&nbsp;<?php echo e($usercomment -> variable2); ?>&nbsp;را اختصاص میدهم</span>/
        <span class=""> &nbsp;همچنین از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> variable3); ?>&nbsp;عدد&nbsp;<?php echo e($usercomment -> variable3); ?>&nbsp;را اختصاص میدهم</span>/
        <span class=""> &nbsp;و از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> variable4); ?>&nbsp;عدد&nbsp;<?php echo e($usercomment -> variable4); ?>&nbsp;را اختصاص میدهم</span>/
        <span class=""> &nbsp;و از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> variable5); ?>&nbsp;عدد&nbsp;<?php echo e($usercomment -> variable5); ?>&nbsp;را اختصاص میدهم</span>/
        <span class=""> &nbsp;همچنین از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> negative_point); ?>&nbsp;نظرم&nbsp;<?php echo e($usercomment -> possetive_point); ?>&nbsp;میباشد</span>/
        <span class=""> &nbsp;و در نهایت از 5&nbsp;-&nbsp;0&nbsp;به  &nbsp;  <?php echo e($product -> possetive_point); ?>&nbsp;نظرم&nbsp;<?php echo e($usercomment -> negative_point); ?>&nbsp;میباشد </span>/



       </div><!--12 -->
       <div class="col-md-5"></div>
   </div><!--row --> 
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
</div><!--نمایش نظرات کاربران--> 
<br><br>
<!--====================================ثبت نظرات کاربران=========================-->
            <div class="row">
                <div class="col-md-12">   
                    <p class="user-name btn btn-primary "> ثبت نظر :</p><br><br><br>
            </div><!--row12-sabte nazar-->
            <div class="row">
                <div class="col-md-6">
                    <img  class="thinking" src="<?php echo e(url('resources/assets/image/thinking.jpg')); ?>"> <br><br><br>
                </div>
                <div class="col-md-6 form-inline">
                <form action="<?php echo e(url('stores')); ?>" method="post">
                <input type="hidden" name="idproduct" value="<?php echo e($product-> id); ?>">
                           <?php echo e(csrf_field()); ?>

                            <div class="col-md-5">
                                    <lable class="lables">نام</lable><br><br><br>
                                    <lable class="lables">ایمیل</lable><br><br><br>
                                    <lable class="lables"> نظر شما درباره<?php echo e($product -> variable1); ?> </lable><br><br><br>
                                    <lable class="lables"> نظر شما درباره <?php echo e($product -> variable2); ?></lable><br><br><br>
                                    <lable class="lables"> نظر شما درباره <?php echo e($product -> variable3); ?></lable><br><br><br>
                                    <lable class="lables"> نظر شما درباره <?php echo e($product -> variable4); ?></lable><br><br><br>
                                    <lable class="lables"> نظر شما درباره <?php echo e($product -> variable5); ?></lable><br><br><br>
                                    <lable class="lables">  نظر شما درباره <?php echo e($product -> negative_point); ?></lable><br><br><br><br>
                                    <lable class="lables"> نظر شما درباره <?php echo e($product -> possetive_point); ?></lable><br><br><br>
                            </div>  
                            <div class="col-md-7">
                                <input type="text" name="name" class="form-control "id="exampleInputName2"required /><br><br>
                                <input type="email" name="email" class="form-control" id="exampleInputName2" required /><br><br>
                                 <input type="number" name="variable1" class="form-control" id="exampleInputName2" placeholder="بین 0-5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="variable2" class="form-control" id="exampleInputName2" placeholder="بین 0-5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="variable3" class="form-control" id="exampleInputName2" placeholder="بین 0-5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="variable4" class="form-control" id="exampleInputName2" placeholder="بین 0-5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="variable5" class="form-control" id="exampleInputName2" placeholder="بین 0-5 یک عدد وارد کنید" required /><br><br>
                                <textarea id="w3mission" rows="4" cols="25" name="possetive_point"></textarea>
                                <textarea id="w3mission" rows="4" cols="25" name="negative_point"></textarea><br><br> 
                            </div>
                            <button type="submit" name="btn" class="btn-your-comment">ارسال </button>

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

            </div><!--main-row- your Comments-->
        </div><!--row-main-product-->
        <br><br><br>
    </div><!--container-->

<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>