<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
</body>
</html>