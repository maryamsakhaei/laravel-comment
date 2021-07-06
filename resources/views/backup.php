@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fulid">
        <div class="row product" >
             <div class="col-md-4">
                <img class="show-img" src={{ $product -> photo}}>
            </div><!--row4-->
            <div class="col-md-4">
                <p  class="btn btn-primary">ماشین: {{ $product -> name}}</p><br>
                <span class="texts">مدل: </span>&nbsp;&nbsp; &nbsp;<input type="text"  name="price" value="&nbsp;&nbsp;&nbsp;{{$product ->model }}" class="space"><br>
                <span class="texts">رنگ:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><input type="text" name="color" value="&nbsp;&nbsp;&nbsp;{{$product -> color }}" class="space"> <br>
                <span class="texts">کیفیت:</span> <input type="text" name="quality" value="&nbsp;&nbsp;&nbsp;{{$product -> quality }}" class="space"><br>
                <span class="texts">شتاب:</span> &nbsp;<input type="text" name="speed" value="&nbsp;&nbsp;&nbsp;{{$product -> speed }}" class="space"><br>
                <span class="texts">جنس:</span> &nbsp;<input type="text" name="material" value="&nbsp;&nbsp;&nbsp;{{$product -> material }}" class="space"><br>
                <span class="texts">قیمت: </span> &nbsp;<input type="text" name="price" value="&nbsp;&nbsp;&nbsp;{{$product ->price }}" class="space" disabled><br>
            </div><!--row4-->
            <div class="col-md-4">
                <br>
                <span class="texts">نقاط قوت: </span>
                <textarea id="w3mission" rows="4" cols="50" class="space" name="possetive" disabled>{{$product -> possetive_point }}</textarea>
                <span class="texts">نقاط ضعف: </span>
                <textarea id="w3mission" rows="4" cols="50" disabled>{{$product-> negative_point }}</textarea>
                <br><br>
            </div><!--row4-->
<!--====================================نمایش نظرات کاربران==========================-->
            <div class="row">
                 @foreach($usercomments as $usercomment)
                <div class="col-md-12">
                    <hr class="hrs">
                    <p class="user-name btn btn-primary " >&nbsp;{{ $usercomment-> name}}&nbsp;گفته: </p><br><br><br>
                </div>
                 <div class="row">
                    <div class="col-md-2"><span class="view-comment">رنگ:&nbsp;&nbsp;</span>  <input type="text" name="color" value="&nbsp;&nbsp;{{ $usercomment -> color}}" class="user-comment" disabled></div>
                    <div class="col-md-2"><span class="view-comment">کیفیت:</span>  <input type="text" name="color" value="&nbsp;&nbsp;&nbsp;{{ $usercomment -> quality}}" class="user-comment"disabled></div>
                    <div class="col-md-2"><span class="view-comment">شتاب:</span>  <input type="text" name="color" value=" &nbsp;&nbsp;&nbsp;{{ $usercomment -> speed}}" class="user-comment" disabled></div>
                    <div class="col-md-2"><span class="view-comment">جنس:</span>  <input type="text" name="color" value="&nbsp;&nbsp;&nbsp;{{ $usercomment -> material}}" class="user-comment" disabled></div>
                    <div class="col-md-2"><span class="view-comment">قیمت:</span>  <input type="text" name="color" value="&nbsp;{{ $usercomment -> price}}" class="user-comment" disabled></div>
                    <div class="col-md-2"></div>
                 </div><!--2 -->
                 <br><br>
                <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-1">
                <span class="view-comment">نقاط قوت:&nbsp;</p></div>
                <div class="col-md-3">
                <textarea id="w3mission" rows="4" cols="50" disabled>&nbsp;&nbsp;&nbsp;{{ $usercomment -> possetive_point}}</textarea></div>
                <div class="col-md-1"></div>
                <!-- negative point-->
                <div class="col-md-1">
                <span class="view-comment">نقاط ضعف:</p></div>
                <div class="col-md-3">
                <textarea id="w3mission" rows="4" cols="50" disabled>&nbsp;&nbsp;&nbsp;{{ $usercomment -> negative_point}}</textarea>
                </div>
                <div class="col-md-2"></div> 
                @endforeach 
             </div><!--نمایش نظرات کاربران--> 
<!--====================================ثبت نظرات کاربران=========================-->
             <div class="row">
                <div class="col-md-12">
                    <hr class="hrs">    
                    <p class="user-name btn btn-primary ">ثبت نظر :</p><br><br><br>
                </div><!--row12-sabte nazar-->
            <div class="row">
                <div class="col-md-6">
                    <img  class="thinking" src="{{url('resources/assets/image/thinking.jpg')}}"> <br><br><br>
                </div>
                <div class="col-md-6 form-inline">
                <form action="{{url('stores')}}" method="post">
                <input type="hidden" name="idproduct" value="{{$product-> id}}">
                           {{ csrf_field() }}
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

            </div><!--main-row- your Comments-->
        </div><!--row-main-product-->
        <br><br><br>
    </div><!--container-->
