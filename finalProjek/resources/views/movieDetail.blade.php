@extends('layouts.master')

@section('content')

<div class="">
    <h1 class="d-flex justify-content-center">{{ $moviesDetail->first()->title }}</h1>
    <img class="d-flex justify-content-center ml-20" src="{{ asset('storage/movieImageFile/'.$moviesDetail->first()->background_image) }}" alt="Card image cap">


    <a href="/addToWatchlist/{{ $moviesDetail->first()->id }}"><button class="btn btn-danger">Add To Watchlist</button></a>
    <h1 class="d-flex justify-content-center">Cast</h1>
    <div class="d-flex justify-content-center">
        @foreach ($moviesDetail as $item)
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="{{ asset('storage/castImageFile/'.$moviesDetail->first()->cast_image) }}" alt="Card image cap">
            <div class="card-body">
                <h4>{{ $item->name }}</h4>
              <p class="card-text">{{ $item->character_name }}</p>
            </div>
          </div>
        @endforeach
    </div>



<div class="d-flex justify-content-center m-5">
    @can('admin')
{{-- </form>
<br>
<form action="/deletedetails" method="POST">
    @csrf
@auth
@if (auth()->user()->role=='admin')
<input type="hidden" name="dId" value="{{$detail->id}}">
<a href="/home" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-danger">Delete Item</button>
@endif
@endauth
</form> --}}

    <form action="/deleteMovieDetail/{{ $moviesDetail->first()->id }}" method="POST">
        @csrf
        @auth
            @if (auth()->user()->role=='admin')
                <button type="submit" class="btn btn-warning m-5">Delete Movie</button>

            @endif
        @endauth
    </form>

    <a href="/editMovieDetail/{{ $moviesDetail->first()->id }}"><button class="btn btn-danger m-5">Edit Movie</button></a>
    {{-- <a href="/editActor/{{ $actorsDetail->id }}">Edit Actor</a> --}}



@endcan
</div>

</div>
@endsection



