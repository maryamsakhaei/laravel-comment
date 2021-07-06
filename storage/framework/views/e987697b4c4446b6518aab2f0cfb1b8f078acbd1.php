<?php $__env->startSection('title'); ?>
    comment
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<body>
    
        <div class="container-fulide">
            <div class="row product" >
                <div class="col-md-4">
                    <img class="show-img" src=<?php echo e($name['photo']); ?>>
                </div><!--row4-->
                <div class="col-md-4">
                    <p  class="btn btn-primary">ماشین سمند</p><br>
                    <span class="texts">مدل: </span>&nbsp;&nbsp; &nbsp;<input type="text" name="price" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['model']); ?>" class="space"><br>
                    <span class="texts">رنگ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="color" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['color']); ?>" class="space"> <br>
                    <span class="texts">کیفیت:</span> <input type="text" name="quality" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['quality']); ?>" class="space"><br>
                    <span class="texts">شتاب:</span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['speed']); ?>" class="space"><br>
                    <span class="texts">جنس:</span> &nbsp;<input type="text" name="material" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['material']); ?>" class="space"><br>
                    <span class="texts">قیمت: </span> &nbsp;<input type="text" name="price" value="&nbsp;&nbsp;&nbsp;<?php echo e($name['price']); ?>" class="space"><br>
                </div><!--row4-->
                <div class="col-md-4">
                    <br>
                <span class="texts">نقاط قوت: </span>
                    <textarea id="w3mission" rows="4" cols="50" class="space" name="possetive" ><?php echo e($name['possetive_point']); ?></textarea>
                    <span class="texts">نقاط ضعف: </span>
                    <textarea id="w3mission" rows="4" cols="50"><?php echo e($name['negative_point']); ?></textarea>
                    <br><br>
                </div><!--row4-->
                <br><br> <br><br> <br><br>
                <hr class="hrs">
                <br><br>
<!--====================================نمایش نظرات کاربران==========================-->

<!--============================ Comments view end==================================-->
<!--==============================ثبت نظرات کاربران=========================-->
<div class="row">
   <div class="col-md-12">
       <p class="user-name btn btn-primary ">ثبت نظر :</p><br><br><br>
   </div><!--row12-sabte nazar-->
   <div class="row">
       <div class="col-md-6">
           <img  class="thinking" src="<?php echo e(url('resources/assets/image/thinking.jpg')); ?>">

           <br><br><br>
       </div>
       <div class="col-md-6 form-inline">
       <form action="stores" method="post">
           <?php echo csrf_field(); ?>
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
               <input type="text"name="name"class="form-control "id="exampleInputName2"required /><br><br>
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
   </div>
</div><!--main-row- your Comments-->
<br><br> <br><br>
   </div>
</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('master/layout', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>