@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container-fluid main-img">
        {{-- <div id="graphic"> --}}
            <div class="container">
                    <div class="row"> 
                        <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <br><br><br>
                        <i class="fa fa-user-circle" style="font-size:24px"><p class="sing-in">Sign in</p></i>
                        <br><br><br>
                        <form action="searchengin" method="post">
                            @csrf
                            <div class="input-group">
                            <span class="input-group-btn">
                                <input type="text" class="form-control" placeholder="جستجو..." name="name">
                                <button type="submit"class="btn btn-default search-icon" type="button"> 
                                 <i class="glyphicon glyphicon-search  search-btn"></i></button>
                            </span>

                            </div><!-- /input-group -->
                        </form>
                    </div>
                    <div class="col-md-3"></div> 
                </div>
            </div>
        {{-- </div> --}}
    </div><!--main container-->
    <ul class="slideshow">
        <li><span></span><div><h3>Search every things that you want</h3></div></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
        <li><span></span></li>
      </ul>
        <div class="container">
          <header>
            {{-- <h1>CSS3 <span>Fullscreen Slideshow</span></h1> --}}
        </header>
      </div>
@endsection
