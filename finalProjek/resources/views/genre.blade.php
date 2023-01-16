@extends('layouts.master')

@section('content')


    <h1 class="d-flex justify-content-center">{{ $genreMovies->first()->genre }}</h1>

    <div class="d-flex justify-content-center"></div>
        @foreach ($genreMovies as $item)
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
            {{-- <h1>{{ $genreMovies->first()->title }}</h1> --}}
        @endforeach
    </div>
@endsection
