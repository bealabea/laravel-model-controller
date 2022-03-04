<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Best Movies</title>
</head>
<body>
    <header class="header">
    <img class="title" src="/img/title.png" alt="">
    <img class="image" src="/img/movies_.png" alt="">
    </header>
    <div class="container">
        @foreach($data as $movie)
        <div class="card">
            <div class="card-image">
                <img src="{{$movie->url}}" alt="">
            </div>
            <h3 class="text">{{$movie->title}}</h3>
            <h4 class="text">"{{$movie->original_title}}"</h4>
            <p class="text">"{{$movie->date}}"</p>
        </div>
        @endforeach
    </div>
    
</body>
</html>