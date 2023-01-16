@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center m-5">
    <form action="/watchlist" method="GET">
    <input type="text" placeholder="Search watchlist" name="search">
    <button type="submit" class="btn btn-primary">Search</button>
</div>
<h1 class="d-flex justify-content-center mb-2">WATCHLIST</h1>
    <div class="d-flex justify-content-center">
    @foreach ($watchlists as $item)
      <div class="d-flex" style="display: flex">
        <div class="card d-flex" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/movieImageFile/'.$item->movie_image) }}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{ $item->title }}</h5>
              <p class="card-text">{{ $item->status }}</p>

              <form action="/editWatchlistStatus/{{ $watchlists->first()->id }}" method="POST">
                <select name="status" id="status">
                    <option value="1">pending</option>
                    <option value="2">ongoing</option>
                    <option value="3">watched</option>
                </select>
                <button class="btn btn-danger" type="submit">Edit Status</button>
              </form>

              <a href="/movieDetail/{{ $item->id }}" class="btn btn-info m-3">movie detail</a>
              <form action="/deleteFromWatchlist/{{ $item->id }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-warning m-5">Delete From watchlist</button>
            </form>
              <a href="/movieDetail/{{ $item->id }}" class="btn btn-danger m-3">Delete from watchlist</a>

            </div>
          </div>
      </div>

    @endforeach
    </div>

    {{-- <h1>AAAAAAAAAAAAAAAA</h1>
    @foreach ($watchlists as $item)

    <h1>{{ $item->MovieWatchlistToMovie->title }}</h1>

    @endforeach --}}
@endsection
