<div class="container">
    @foreach($data as $movie)
    <div class="card">
        <img src="{{$movie->url}}" alt="">
        <h3 class="text">{{$movie->title}}</h3>
        <h4 class="text">"{{$movie->original_title}}"</h4>
        <p class="text">"{{$movie->date}}"</p>
        <p class="text"><i>{{$movie->nationality}}</i></p>
    </div>
    @endforeach
</div>