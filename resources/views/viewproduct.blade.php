@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
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
                    @foreach($product_id as $product)
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-6 details">
                        {{ $product -> product_id}}
                        <hr>
                    </div>
                     <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-6 details">
                    {{ $product -> photo}}
                        <hr>
                    </div>
                    <!-- <div class="col-md-3 details"></div>  -->
                     @endforeach
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
            @csrf
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
    <a href= "{{url('admin')}}" class="viewproduct"> صفحه اصلی</a>
    <br><br><br><br><br><br><br><br><br><br><br><br>
<!--===========================قسمت اضافه کردن محصول==================================-->
     </div><!--main row-->
    </div><!--container-->
    @endsection
