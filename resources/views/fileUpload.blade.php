
@extends('master/layout')
@section('title')
    comment
@endsection
@section('content')
<body>
    <div class="container">

        <div class="panel panel-primary">
          <div class="panel-heading"><h2>laravel 6 file upload example - ItSolutionStuff.com.com</h2></div>
          <div class="panel-body">

            @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button>
                    <strong>{{ $message }}</strong>
            </div>
            <img src="uploads/{{ Session::get('file') }}">
            @endif

            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('file.upload.post') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">

                    <div class="col-md-6">
                        <input type="file" name="file" class="form-control">
                    </div>

                    <div class="col-md-6">
                        <button type="submit" class="btn btn-success">Upload</button>
                    </div>

                </div>
            </form>

          </div>
        </div>
    </div>
@endsection
 <?php 
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
//  Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//     $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//     if($check !== false) {
//         echo "File is an image - " . $check["mime"] . ".";
//         $uploadOk = 1;
//     } else {
//         echo "File is not an image.";
//         $uploadOk = 0;
//     }
// }
//  Check if file already exists
// if (file_exists($target_file)) {
//     echo "Sorry, file already exists.";
//     $uploadOk = 0;
// }
//  Check file size
// if ($_FILES["fileToUpload"]["size"] > 50000000) {
//     echo "Sorry, your file is too large.";
//     $uploadOk = 0;
// }
//  Allow certain file formats
// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
// && $imageFileType != "gif" ) {
//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
//     $uploadOk = 0;
// }
//  Check if $uploadOk is set to 0 by an error
// if ($uploadOk == 0) {
//     echo "Sorry, your file was not uploaded.";
//  if everything is ok, try to upload file
// } else {
//     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//         echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
//     } else {
//         echo "Sorry, there was an error uploading your file.";
//     }
// }
 ?> 