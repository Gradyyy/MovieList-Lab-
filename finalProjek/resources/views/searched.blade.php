@extends('layouts.master')

@section('content')

<div class="d-flex justify-content-center flex-wrap">
    @foreach ($searchActors as $item )
    <h1>{{ $item->name }}</h1>
    <h6>{{ $item->name }}</h6>

    {{-- <div class="card df py-2 px-2 mx-2 my-2" style="width: 24rem; height: 30rem;">
        <div class="card-body">
            <h3 class="card-title">{{$sc->clothing_name}}</h3>
            <p class="card-text">Rp. {{$sc->price}}</p>
             <a href="/details/{{$sc->id}}" class="btn btn-primary">More Detail</a>
        </div>
    </div> --}}
    @endforeach
</div>
@endsection
