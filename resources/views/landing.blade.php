<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300;400;700&family=Montserrat+Alternates:ital,wght@0,500;0,800;1,700;1,800;1,900&family=Montserrat:wght@700&family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Landing Page</title>
</head>
<body>
    <div class="header">
        <img src="{{ url('/assets/eye.png') }}" alt="filme" id="header-logo">
        <div class="btn-group">
            <a href="/login" class="btn btn-light" id="login">Login</a>
            <a href="/signup" class="btn btn-dark" id="signup">Sign Up</a>
        </div>
    </div>
    <div class="landing-container">
    </div>
    <div class="info-container">
        <div class="item1-container">
            <div class="item1-text">
                <h4>Watch Movie for Free</h4>
                <h6>Watch everything you want for Free in 1 month.</h6>
            </div>
            <div class="right-info">
                <div class="right-text">
                    <h1>1 M+</h1>
                    <h6>Movies Available</h6>
                </div>
            </div>
        </div>
        <div class="item2-container">
            <div class="top-item">
                <h1>10 M+</h1>
            </div>
            <div class="bot-item">
                <h6>User Registered</h6>
            </div>
        </div>
        <div class="item3-container">
            <div class="top-item">
                <h1>Available on :</h1>
            </div>
            <div class="bot-item">
                <img src="{{ url('/assets/Playstore.png') }}" alt="playstore">
                <h6>Playstore</h6>
            </div>
        </div>
        <div class="item4-container">
            <div class="bot-item">
                <img src="{{ url('/assets/App Store.png') }}" alt="app store">
                <h6>App Store</h6>
            </div>
        </div>
    </div>
    <div class="service-title">
        <h4>Our Service</h4>
    </div>
    <div class="services">
        <div class="service-1">
            <h4>STANDARD</h4>
            <div class="service-item">
                <h6>Ads-free</h6>
                <img src="{{ url('/assets/cross.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Download Movie</h6>
                <img src="{{ url('/assets/cross.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Customer Services</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Unlimited Movies Watched</h6>
                <img src="{{ url('/assets/cross.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>HD 720p Quality</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
        </div>
        <div class="service-2">
            <h4>PLATINUM</h4>
            <div class="service-item">
                <h6>Ads-free</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Download Movie</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Customer Services</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Unlimited Movies Watched</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>HD 1080p Quality</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
        </div>
        <div class="service-3">
            <h4>GOLD</h4>
            <div class="service-item">
                <h6>Ads-free</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Download Movie</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>Customer Services</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>24 Hrs Unlimited Movies Watched</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
            <div class="service-item">
                <h6>UHD 4K Quality</h6>
                <img src="{{ url('/assets/check.png') }}" alt="cross" id="status">
            </div>
        </div>
    </div>
    <footer>
        <div class="top-container">
            <div class="top-item">
                <img src="{{ url('/assets/eye.png') }}" alt="filme" id="header-logo">
                <h4>filme</h4>
            </div>
        </div>
        <h6>&copy; copyright filme 2022</h6>
    </footer>
</body>
</html>