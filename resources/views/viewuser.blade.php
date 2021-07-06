@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
     <div class="container-fulide">
         <div class="row adminlogin" >  
                <div class="col-md-12">
                    <p class="viewproduct"> لیست کاربران  </p>
                    <br><br><br><br>
                </div> <!--wellcome -->
                  <!--=========================نمایش  نام.ایمیل.موبایل====================-->
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser">نام</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"><p class="showuser model">ایمیل</p></div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2"></div>
                </div>
                <br>
               <!--=========================نمایش کاربران====================-->
                <div class="row" >
                    @foreach($name as $model)
                    <!-- <div class="col-md-2"></div> -->
                    <div class="col-md-6 details">
                        {{ $model -> name}}
                        <hr>
                    </div>
                     <!-- <div class="col-md-1"></div> -->
                    <div class="col-md-6 details">
                    {{ $model -> email}}
                        <hr>
                    </div>
                    <!-- <div class="col-md-3 details"></div>  -->
                     @endforeach
                </div>
                <br><br>
                <a href= "{{url('admin')}}" class="viewproduct">صفحه اصلی</a>
                <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
     </div><!--main row-->
    </div><!--container-->
    @endsection
