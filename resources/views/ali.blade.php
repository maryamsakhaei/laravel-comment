@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
<div class="row">

     @foreach($color as $usercomment)
    <div class="col-md-12">
    <p class="user-name btn btn-primary " >&nbsp;{{ $usercomment -> name}}&nbsp;گفته: </p><br><br><br>
</div>
<div class="row">

    <div class="col-md-2"><span class="view-comment">رنگ:&nbsp;&nbsp;</span>  <input type="text" name="color" value="&nbsp;&nbsp;{{ $usercomment -> color}}" class="user-comment"></div>
    <div class="col-md-2"><span class="view-comment">کیفیت:</span>  <input type="text" name="color" value="&nbsp;&nbsp;&nbsp;{{ $usercomment -> quality}}" class="user-comment"></div>
    <div class="col-md-2"><span class="view-comment">شتاب:</span>  <input type="text" name="color" value=" &nbsp;&nbsp;&nbsp;{{ $usercomment -> speed}}" class="user-comment"></div>
    <div class="col-md-2"><span class="view-comment">جنس:</span>  <input type="text" name="color" value="&nbsp;&nbsp;&nbsp;{{ $usercomment -> material}}" class="user-comment"></div>
    <div class="col-md-2"><span class="view-comment">قیمت:</span>  <input type="text" name="color" value="&nbsp;{{ $usercomment -> price}}" class="user-comment"></div>
    <div class="col-md-2"></div>
</div><!--row12-->
<br><br>
<div class="row">
    <div class="col-md-1"></div>
    <div class="col-md-1">
    <span class="view-comment">نقاط قوت:&nbsp;</p></div>
    <div class="col-md-3">
    <textarea id="w3mission" rows="4" cols="50">&nbsp;&nbsp;&nbsp;{{ $usercomment -> possetive_point}}</textarea></div>
    <div class="col-md-1"></div>
    <!-- negative point-->
    <div class="col-md-1">
    <span class="view-comment">نقاط ضعف:</p></div>
    <div class="col-md-3">
    <textarea id="w3mission" rows="4" cols="50">&nbsp;&nbsp;&nbsp;{{ $usercomment -> negative_point}}</textarea>
    </div>
    <div class="col-md-2"></div>

  </div>

</div><!--main-row- user Comments-->
<hr class="hrs">
@endforeach
<!--============================ Comments view end==================================-->
<!--==============================ثبت نظرات کاربران=========================-->
<div class="row">
    <div class="col-md-12">
        <p class="user-name btn btn-primary ">ثبت نظر :</p><br><br><br>
    </div><!--row12-sabte nazar-->
    <div class="row">
        <div class="col-md-6">
            <img  class="thinking" src="{{url('resources/assets/image/thinking.jpg')}}">

            <br><br><br>
        </div>
        <div class="col-md-6 form-inline">

        <form action="stores" method="get">
            @csrf
            <div class="col-md-4">
                <lable class="lables">نام</lable><br><br><br>
                <lable class="lables">ایمیل</lable><br><br><br>
                <lable class="lables"> شما درباره رنگ محصول</lable><br><br><br>
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

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        </div>
    </div>
</div><!--main-row- your Comments-->
<br><br> <br><br>
    </div>
</div>
@endsection
