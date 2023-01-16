@extends('layouts.master')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        @for ($i = 0; $i<3;$i++)
            <?php

            $x = rand(0,count($movies)-1);
            ?>

            <div class="carousel-item @if ($i == 0 )
                active
            @endif">
                <h1>{{ $movies[$x]->title }}</h1>
                <img src="{{ asset('storage/movieImageFile/'.$movies[$x]->background_image) }}" class="d-block w-100" src="..." alt="First slide">
            </div>
        @endfor
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

{{-- card --}}

<div class="d-flex justify-content-center" style="display: flex">

  @foreach ( $movies as $item )
  <div class="d-flex m-2">
    <div class="card d-flex" style="width: 18rem;">
        <a href="/movieDetail/{{ $item->id }}"><img src="{{ asset('storage/movieImageFile/'.$item->movie_image) }}" alt=""></a>
        <div class="card-body">
            <p>{{ $item->title }}</p>
            <p>{{ $item->release_date }}</p>
        </div>
    </div>
  </div>
  @endforeach



</div>

@can('admin')
<div class="d-flex justify-content-center mt-5 mb-5">
    <a href="/addMovie"><button class="btn btn-warning">Add New Movie</button></a>
</div>
@endcan





  <div class="justify-content-center">
    <a href="/viewGenreById/1"><button class="btn btn-primary">Animation</button></a>

  <a href="/viewGenreById/2"><button class="btn btn-primary">Comedy</button></a>

  <a href="/viewGenreById/3"><button class="btn btn-primary">Anime</button></a>

  <a href="/viewGenreById/4"><button class="btn btn-primary">Crime</button></a>

  <a href="/viewGenreById/5"><button class="btn btn-primary">Drama</button></a>

  <a href="/viewGenreById/6"><button class="btn btn-primary">Family</button></a>

  <a href="/viewGenreById/7"><button class="btn btn-primary">Fantasy</button></a>

  <a href="/viewGenreById/8"><button class="btn btn-primary">History</button></a>

  <a href="/viewGenreById/9"><button class="btn btn-primary">Horror</button></a>
  </div>






@endsection
