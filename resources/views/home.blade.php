<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    @vite('resources/js/app.js')
    
</head>
<body>
    
    <header>
    <div class="container">
      <a href="#"><img src="{{ asset('images/dc-logo.png') }}" alt="DC Logo" /></a>
      <ul>
        <li>
            <a href="{{ route('characters') }}"> CHARACTERS</a>
        </li>
        <li>
            <a href="{{ route('comics') }}"> COMICS</a>
        </li>
        <li>
            <a href="{{ route('movies') }}"> MOVIES</a>
        </li>
        <li>
            <a href="{{ route('tv') }}"> TV</a>
        </li>
        <li>
            <a href="{{ route('games') }}"> GAMES</a>
        </li>
        <li>
            <a href="{{ route('collectibles') }}"> COLLECTIBLES</a>
        </li>
        <li>
            <a href="{{ route('videos') }}"> VIDEOS</a>
        </li>
        <li>
            <a href="{{ route('fans') }}"> FANS</a>
        </li>
        <li>
            <a href="{{ route('news') }}"> NEWS</a>
        </li>
        <li>
            <a href="{{ route('shop') }}"> SHOP</a>
        </li>
      </ul>
    </div>
  </header>

</body>
</html>