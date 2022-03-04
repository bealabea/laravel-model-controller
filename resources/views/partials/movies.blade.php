<div class="container">
    @foreach($data as $movie)
    <div class="card">
        <img src="{{$movie->url}}" alt="">
        <h3 class="text">{{$movie->title}}</h3>
        <h4 class="text">"{{$movie->original_title}}"</h4>
        <p class="text">"{{$movie->date}}"</p>
        <p class="text"><i>{{$movie->nationality}}</i></p>
        @for($i =0; $i <5; $i++)
            @if ($i < floor($movie['vote'] / 2))    
            <i class="star fas fa-star"></i>
            @else
            <i class="star far fa-star"></i>
            @endif
        @endfor
    </div>
    @endforeach
</div>