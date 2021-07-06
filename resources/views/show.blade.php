 @extends('master/layout')
@section('title')
    comment 
@endsection
@section('content')
<body>
    @if(isset($details))
    <div class="row">
        @foreach($details as $model)
        <div class="col-md-4">
            <br><br>
            <a href="{{url('comment/'.$model->id)}}"><br>
            <img  src= "{{url('public/images')}}/{{ $model -> photo}} " class= "show-img" >
            </a>
            <br>
              <!-- <p  class="btn btn-primary show-name">{{ $model -> name}}</p><br> 
             <p  class="btn btn-secondary show-name"> مدل:{{ $model -> model}}</p><br> -->
        </div>
        @endforeach
        <div class="col-md-4"></div>
        <div class="col-md-4"></div>
    </div>
 @endif
@endsection




