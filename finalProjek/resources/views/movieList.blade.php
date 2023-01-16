@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center">
    <form action="/showMovieList" method="GET">
    <input type="text" placeholder="Search Movie" name="search">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
<div class="d-flex justify-content-center">
@foreach ($movies as $item)
    <?php

    ?>
    <div class="card d-flex justify-content-center m-3" style="width: 18rem;">
        <img class="" src="{{ asset('storage/movieImageFile/'.$item->movie_image) }}" alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title">{{ $item->title }}</h5>
            <div >
                <a href="/movieDetail/{{ $item->id }}" class="btn btn-primary">detail</a>
                <a href="/addToWatchlist/{{ $item->id }}" class="btn btn-primary">Add to Watchlist</a>
            </div>

        </div>
    </div>

@endforeach
</div>

@endsection
