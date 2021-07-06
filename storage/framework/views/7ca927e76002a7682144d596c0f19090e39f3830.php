 
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
                
                <span class="texts">مدل: </span>&nbsp;&nbsp; &nbsp;<input type="text"  name="price" value="&nbsp;&nbsp;&nbsp;<?php echo e($product ->model); ?>" class="space" disabled><br>
                <span class="texts">رنگ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="color" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> color); ?>" class="space" disabled> <br>
                <span class="texts">کیفیت:</span> <input type="text" name="quality" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> quality); ?>" class="space" disabled><br>
                <span class="texts">شتاب:</span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> speed); ?>" class="space" disabled><br>
                <span class="texts">جنس:</span> &nbsp;<input type="text" name="material" value="&nbsp;&nbsp;&nbsp;<?php echo e($product -> material); ?>" class="space" disabled><br>
                <span class="texts">قیمت: </span> &nbsp;<input type="text" name="price" value="&nbsp;&nbsp;&nbsp;<?php echo e($product ->price); ?>" class="space" disabled><br>
            </div><!--row4-->
            <div class="col-md-4">
                <br>
                <span class="texts">نقاط قوت: </span>
                <textarea id="w3mission" rows="4" cols="50" class="space" name="possetive" disabled>&nbsp;&nbsp;&nbsp;<?php echo e($product -> possetive_point); ?></textarea><br>
                <span class="texts">نقاط ضعف: </span>
                <textarea id="w3mission" rows="4" cols="50" disabled>&nbsp;&nbsp;&nbsp;<?php echo e($product-> negative_point); ?></textarea>
                <br><br>
            </div><!--row4-->
<!--====================================نمایش نظرات کاربران==========================-->
<div class="row">
    <?php $__currentLoopData = $usercomments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $usercomment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
   <div class="col-md-12">
       <br> <br> <br>
       <input type="text" name="price" value="<?php echo e($usercomment-> name); ?>" class="user-name">&nbsp;&nbsp;&nbsp;<span class="gofte">گفته</span><br>
    <img  src= "<?php echo e(url('public/profile')); ?>/<?php echo e($usercomment->personal_photo); ?>" class="usercomment-img">
   </div>
    <div class="row ">
       <div class="col-md-1"></div>
       <div class="col-md-6  border-text">
           <br>
       <span class="">من فکر میکنم به رنگ آن میتوان شماره <?php echo e($usercomment -> color); ?>&nbsp;را اختصاص داد &nbsp;&nbsp;</span>  
        <span class=""> همچنین به کیفیت آن شماره <?php echo e($usercomment -> quality); ?> را اختصاص داد
       <span class=""> به شتاب آن نمره <?php echo e($usercomment -> speed); ?> را میدهم</span>
       <span class=""> جنس آن نیز <?php echo e($usercomment -> material); ?> میباشد</span>
       <span class=""> من فکر میکنم قیمت آن نیز بیشتر از <?php echo e($usercomment -> price); ?> نباشد</span> 
       <span class=""> من فکر میکنم نقاط مثبت آن <?php echo e($usercomment -> possetive_point); ?> میباشد و همچنین </span>  
       <span class="">  فکر میکنم نقاط منفی آن نیز   <?php echo e($usercomment -> negative_point); ?> نباشد</span>   
       </div><!--12 -->
       <div class="col-md-5"></div>
   </div><!--row --> 
   <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 

  
</div><!--نمایش نظرات کاربران--> 
<!--====================================ثبت نظرات کاربران=========================-->
             <div class="row">
                <div class="col-md-12">   
                    <p class="user-name btn btn-primary ">ثبت نظر :</p><br><br><br>
                </div><!--row12-sabte nazar-->
            <div class="row">
                <div class="col-md-6">
                    <img  class="thinking" src="<?php echo e(url('resources/assets/image/thinking.jpg')); ?>"> <br><br><br>
                </div>
                <div class="col-md-6 form-inline">
                <form action="<?php echo e(url('stores')); ?>" method="post">
                <input type="hidden" name="idproduct" value="<?php echo e($product-> id); ?>">
                           <?php echo e(csrf_field()); ?>

                            <div class="col-md-4">
                                    <lable class="lables">نام</lable><br><br><br>
                                    <lable class="lables">ایمیل</lable><br><br><br>
                                    <lable class="lables">نظر شما درباره رنگ محصول</lable><br><br><br>
                                    <lable class="lables">نظر شما درباره کیفیت محصول</lable><br><br><br>
                                    <lable class="lables">نظر شما درباره قیمت محصول</lable><br><br><br>
                                    <lable class="lables">نظر شما درباره شتاب محصول</lable><br><br><br>
                                    <lable class="lables">نظر شما درباره جنس محصول</lable><br><br><br>
                                    <lable class="lables">نقاط قوت</lable><br><br><br><br><br><br><br>
                                    <lable class="lables">نقاط ضعف</lable><br><br><br>
                                    
                            </div>
                            <div class="col-md-1"></div>
                            <div class="col-md-7">
                                <input type="text" name="name" class="form-control "id="exampleInputName2"required /><br><br>
                                <input type="email" name="email" class="form-control" id="exampleInputName2" required /><br><br>
                                <input type="number" name="color" class="form-control" id="exampleInputName2" placeholder="از 0تا 5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="quality" class="form-control" id="exampleInputName2" placeholder="از 0تا 5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="price" class="form-control" id="exampleInputName2" placeholder="از 0تا 5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="speed" class="form-control" id="exampleInputName2" placeholder="از 0تا 5 یک عدد وارد کنید" required /><br><br>
                                <input type="number" name="material" class="form-control" id="exampleInputName2" placeholder="از 0تا 5 یک عدد وارد کنید" required /><br><br>
                                <textarea id="w3mission" rows="4" cols="25" name="possetive_point"></textarea><br><br>
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