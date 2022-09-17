<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}" type ="text/css">
</head>
<body>
<header>
       <ul>
           <li><img src="{{ asset('images/dc-logo.png') }}" alt="dc-logo"></li>
           <li><a href="{{ url('/')}}">CHARACTERS</a></li>
           <li><a href="{{route('comics')}}">COMICS</a></li>
           <li><a href="{{route('movies')}}">MOVIES</a></li>
           <li><a href="{{route('tv')}}">TV</a></li>
           <li><a href="{{route('games')}}">GAMES</a></li>
           <li><a href="{{route('collectibles')}}">COLLECTIBLES</a></li>
           <li><a href="{{route('videos')}}">VIDEOS</a></li>
           <li><a href="{{route('fans')}}">FANS</a></li>
           <li><a href="{{route('news')}}">NEWS</a></li>
           <li><a href="{{route('shop')}}">SHOP</a></li>
       </ul>
</header>
    <div class="jumbotron"></div>
    <footer>
        <div class="first-footer">
            <div class="container">
                <div class="row">
                    <div class="first-col">
                        <div class="first-list-sec">
                           <ul>
                              <li><a href="#"><strong>DC COMICS</strong></a></li>
                              <li><a href="#">Characters</a></li>
                              <li><a href="#">Comics</a></li>
                              <li><a href="#">movies</a></li>
                              <li><a href="#">Tv</a></li>
                              <li><a href="#">Games</a></li>
                              <li><a href="#">Videos</a></li>
                              <li><a href="#">News</a></li>
                           </ul>
                           <ul>
                              <li><a href="#"><strong>SHOP</strong></a></li>
                              <li><a href="#">Shop DC</a></li>
                              <li><a href="#">Shop DC Collectibles</a></li>
                           </ul>
                        </div>
                        <div class="second-list-sec">
                           <ul>
                              <li><a href="#"><strong>DC</strong></a></li>
                              <li><a href="#">Terms of use</a></li>
                              <li><a href="#">Privacy policy(new)</a></li>
                              <li><a href="#">Ad choices</a></li>
                              <li><a href="#">Advertising</a></li>
                              <li><a href="#">jobs</a></li>
                              <li><a href="#">subscription</a></li>
                              <li><a href="#">talent Workshop</a></li>
                              <li><a href="#">CPSC certificates</a></li>
                              <li><a href="#">Ratings</a></li>
                              <li><a href="#">shop Help</a></li>
                              <li><a href="#">Contact Us</a></li>
                           </ul>
                           <ul>
                              <li><a href="#"><strong>SITES</strong></a></li>
                              <li><a href="#">DC</a></li>
                              <li><a href="#">MAD magazine</a></li>
                              <li><a href="#">DC Kids</a></li>
                              <li><a href="#">DC Universe</a></li>
                              <li><a href="#">DC Power Visa</a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="second-col">
                       <img src="{{ asset('images/dc-logo-bg.png') }}" alt="dc-logo-bg">
                    </div>
                </div>
            </div>
        </div>
        <div class="second-footer">
            <div class="container">
                <ul>
                    <li><a href="#"><strong>SIGN UP NOW</strong></a></li>
                </ul>
                <ul>
                    <li><a href="#"><strong>FOLLOW US</strong></a></li>
                    <li>
                        <img src="{{ asset('images/footer-facebook.png') }}" alt="dc-logo-bg">
                    </li>
                    <li>
                        <img src="{{ asset('images/footer-twitter.png') }}" alt="dc-logo-bg">
                    </li>
                    <li>
                        <img src="{{ asset('images/footer-youtube.png') }}" alt="dc-logo-bg">
                    </li>
                    <li>
                        <img src="{{ asset('images/footer-pinterest.png') }}" alt="dc-logo-bg">
                    </li>
                    <li>
                        <img src="{{ asset('images/footer-periscope.png') }}" alt="dc-logo-bg">
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</body>
</html>