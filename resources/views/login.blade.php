@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fulide">
        <div class="row login" >
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>
            <div class="col-md-3 login-form">
                <div>
                    <form action="checklogin" method="post">
                        @csrf
                            <input type="number" name="mobile" class="formStyles"placeholder="موبایل " required />
                            <input type="email" name="email" class="formStyles"placeholder="ایمیل " required />
                            <button type="submit" name="btn" class="formStyles">ارسال </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
