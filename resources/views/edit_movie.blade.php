<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"  href="{{ URL::asset('add_movie_style.css') }}">
    <title>Edit Movie</title>
</head>
<body>
    <div class="page-layout">
        <div class="sidebar-left">
            <div class="header-1">
                <img src="{{ url('/assets/eye.png') }}" alt="filme" id="header-logo">
                <h4>filme</h4>
            </div>
            <h4 class="title-sidebar">Menu</h4>
            <div class="menu">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/home.png') }}" alt=""></a>
                    <a href="/home"><h4>Home</h4></a>    
                </div>
            </div>
            <h4 class="title-sidebar">Library</h4>
            <div class="library">
                <div class="menu-row">
                    <a href=""><img src="{{ url('/assets/add.png') }}" alt=""></a>
                    <a href="/add"><h4>Add Movie</h4></a>
                </div>
            </div>
        </div>
        <div class="main-section">
            <div class="header-2">
                <h4>Edit Movie</h4>
            </div>
            <div class="add-section">
                <div class="cover">
                    <img src="{{ asset('movie-image/'.$data->image) }}" alt="">
                </div>
                <div class="add-form">
                    <form  action="/Update/{{$data->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <label for="" id="title">Title</label>
                        <input name="title" type="text" class="text-input" value="{{$data->title}}">


                        <label for="" id="title">Genre</label>
                        <input name="genre" type="text" class="text-input" value="{{$data->genre}}">
                        

                        <label for="" id="title">Synopsis</label>
                        <textarea name="synopsis" id="" cols="5">  {{$data->synopsis}} </textarea>


                        <label for="" id="title">Duration</label>
                        <input name="duration" type="text" class="text-input" value="{{$data->duration}}">


                        <label for="" id="title">Rating</label>
                        <input name="rating" type="text" class="text-input" value="{{$data->rating}}">

                        <div class="mb-3">
                            <label for="formFile" class="form-label" id="title">Image</label>
                            <input class="form-control" type="file" id="formFile" name="image" value="{{$data->image}}">
                        </div>

                        <label for="" id="title">Link Trailer</label>
                        <input name="trailer" type="text" class="text-input" value="{{$data->trailer}}">

                        <button type="submit">Add Movie</button>   
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>