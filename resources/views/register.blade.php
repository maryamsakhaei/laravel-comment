@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fluide">
        <div id="graphic"></div>
        <div class="row register" >
            <div class="col-md-6">
                <h1>ثبت نام</h1>
                <div>
                    <form action="store" method="post"> 
                        @csrf
                        <input type="text" name="name" class="formStyle"placeholder="نام " required />
                            <input type="number" name="mobile" class="formStyle"placeholder="موبایل " required />
                            <input type="email" name="email" class="formStyle" placeholder="ایمیل " required />
                            <input type="password" name="password" class="formStyle"placeholder="رمز " required />

                            <button type="submit" name="btn" class="formStyle">ذخیره </button>
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
            <div class="col-md-6"></div>
        </div>
    </div>
@endsection
