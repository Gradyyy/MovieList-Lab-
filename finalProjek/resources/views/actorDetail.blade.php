@extends('layouts.master')

@section('content')

{{-- <h1>{{ $actorsDetail->name }}</h1> --}}

<h2 class="d-flex justify-content-center">{{ $movies->first()->name }}</h2>
<h3 class="d-flex justify-content-center">Gender</h3>
<h4 class="d-flex justify-content-center">{{ $movies->first()->gender }}</h4>
<h3 class="d-flex justify-content-center">Biography</h3>
<h5 class="d-flex justify-content-center">{{ $movies->first()->biography }}</h5>
<h3 class="d-flex justify-content-center">DOB</h3>
<h4 class="d-flex justify-content-center">{{ $movies->first()->DOB }}</h4>
<h3 class="d-flex justify-content-center">Place of Birth</h3>
<h4 class="d-flex justify-content-center">{{ $movies->first()->place_of_birth }}</h4>
<h3 class="d-flex justify-content-center">Popularity</h3>
<h4 class="d-flex justify-content-center mb-3">{{ $movies->first()->popularity}}</h4>
{{-- @can('admin')
    <a href="/editActor/{{ $actorsDetail->id }}">Edit Actor</a>
@endcan --}}
<img class="d-flex justify-content-center" src="{{ asset('storage/castImageFile/'.$movies->first()->cast_image) }}" alt="">

<h1 class="d-flex justify-content-center">Known For</h1>
<div class="d-flex justify-content-center">
    @foreach ($movies as $item)
    <div class="card m-5" style="width: 18rem;">
        <img class="card-img-top" src="{{ asset('storage/movieImageFile/'.$item->movie_image) }}" alt="Card image cap">
        <div class="card-body">
            <h4><h1>{{ $item->title }}</h1></h4>
          <p class="card-text">{{ $item->character_name }}</p>
        </div>
      </div>
    @endforeach
</div>


{{-- @foreach ($actorsDetail->castToMovieCast as $item)
    @foreach ($item->movieCastToMovie as $items)
    <h1>{{ $items->title }}</h1>
    @endforeach

@endforeach --}}

<div class="d-flex justify-content-center">
    @can('admin')
    <form action="/showActorDetail/{{ $movies->first()->id }}" method="POST">
        @csrf
        @auth
            @if (auth()->user()->role=='admin')
                <button type="submit" class="btn btn-warning m-5">Delete Actor</button>

            @endif
        @endauth
    </form>

    <a href="/editActor/{{ $movies->first()->id }}"><button class="btn btn-danger m-5">Edit Actor</button></a>



@endcan
</div>

@endsection
