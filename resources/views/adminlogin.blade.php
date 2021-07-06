@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fulide">
        <div class="row adminlogin" >
            <div class="col-md-3"></div>
            <div class="col-md-3"></div>

            <div class="col-md-3 login-form">
                <div>
                    <form action="{{url('check')}}" method="post">
                        @csrf
                            <input type="number" name="mobile" class="formStyles"placeholder="موبایل " required />
                            <input type="email" name="email" class="formStyles"placeholder="ایمیل " required />
                            <button type="submit" name="btn" class="formStyles">ارسال </button>
                    </form>
                </div>
            </div>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br><br><br><br><br><br><br><br>
            <br><br><br>
            <div class="col-md-3"></div>

        </div>
    </div>
@endsection
