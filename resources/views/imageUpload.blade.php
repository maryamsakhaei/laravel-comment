@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <form action="{{ route('image.upload.post') }}" method="POST" enctype="multipart/form-data">

        @csrf

        <div class="row">



            <div class="col-md-6">

                <input type="file" name="photo" class="form-control">

            </div>



            <div class="col-md-6">

                <button type="submit" class="btn btn-success">Upload</button>

            </div>



        </div>

    </form>
@endsection
