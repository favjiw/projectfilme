<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://kit.fontawesome.com/2b7eddacef.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home</title>
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
                    <a href=""><h4>Home</h4></a>    
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
                <a href=""><h4>Movie</h4></a>
                <a href=""><h4>TV Show</h4></a>
                <a href=""><h4>Anime</h4></a>
            </div>
            
            @if(session()->has('success'))
            <div class="alert alert-info" role="alert">
                {{session('succes')}}
              </div>
            @endif

            <div class="big-movie">
                <div class="big-movie-info">
                    <h1>The Batman</h1>
                    <h4>Action</h4>
                    <a href="" class="btn btn-danger">Watch Now</a> 
                </div>
            </div>
            <div class="title-arrow">
                <h4>Latest Movie</h4>
            </div>
            <div class="owl-carousel owl-theme">
                @foreach ($films as $film)
                <div class="item">
                    <div class="movie-container">
                        <img src="{{ asset('movie-image/'.$film->image) }}" alt="">
                        <a href="/detail/{{ $film->id }}" class="btn btn-danger">Watch Now</a>
                    </div>
                </div>
                @endforeach
            </div>   
        </div>
        <div class="sidebar-right">
            <div class="header-3">
                <a href="/profile"><img src="{{ url('/assets/person.png') }}" alt=""></a>
            </div>
            <div class="input">
                <i class="fa-solid fa-magnifying-glass"></i>
                <form action="">
                    <input type="text" placeholder="search">
                </form>
            </div>
            <h4 id="sub-title">Popular Movies</h4>
            <div class="side-movie">
                @foreach ($films->take(3) as $film)
                <div class="movie-cons">
                    <img src="{{ asset('movie-image/'.$film->image) }}" alt="" id="mov-cover">
                    <div class="movie-ect">
                        <div class="movie-info">
                            <h5 id="title">{{ $film->title }}</h5>
                            <h5 id="genre">{{ $film->genre }}</h5>
                        </div>
                        <div class="rating">
                            <img src="{{ url('/assets/star.png') }}" alt="star" id="star">
                            <div class="rating-number">
                                <h5>{{ $film->rating }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <a href="" class="btn btn-secondary" id="btn-more">See More</a>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $('.owl-carousel').owlCarousel({
            loop:false,
            margin:5,
            nav:true,
            pagination: false,
            dots: false,  
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:3
                },
                1000:{
                    items:4
                }
            },
            navText : ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        })
    </script>
</body>
</html>