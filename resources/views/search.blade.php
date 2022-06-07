@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fluid">;
        <div class="container">
                    <div class="row"> 
                        <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br><br><br>
                        <i class="fa fa-user-circle" style="font-size:24px"><p class="sing-in">Sign in</p></i>
                        <br><br><br>
                        <form action="searchengin" method="post">
                            @csrf
                            <input type="text" placeholder="جستجو.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form> 
                    </div>
                    <div class="col-md-3"></div> 
                </div>
        </div>
    </div><!--main container-->
@endsection
