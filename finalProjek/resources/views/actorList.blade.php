@extends('layouts.master')

@section('content')

<form action="/viewActorList" method="GET">
<input type="text" placeholder="Search Actor" name="search">
<button type="submit" class="btn btn-primary">Search</button>

<a href="/addActor">add actor</a>


<div class="d-flex">
@foreach ($actors as $item)
    <div class="card d-flex justify-content-center m-3" style="width: 18rem;">
    <img class="" src="{{ asset('storage/castImageFile/'.$item->cast_image) }}" alt="Card image cap">

    <h3>{{ $item->name }}</h3>
    <a href="/showActorDetail/{{ $item->id }}" class="btn btn-primary">detail</a>
    </div>

{{-- <div class="card d-flex justify-content-center m-3" style="width: 18rem;">
    <img class="" src="{{ asset('storage/castImageFile/'.$item->cast_image) }}" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">{{ $item->name }}</h5>
      <a href="/showActorDetail/{{ $item->id }}" class="btn btn-primary">detail</a>
    </div>
  </div> --}}
@endforeach


</div>

@endsection
