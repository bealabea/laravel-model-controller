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
    <img class="image" src="/img/title.png" alt="">
    <img class="image" src="/img/movies_.png" alt="">
    </header>
    @include('partials.movies');
    
</body>
</html>