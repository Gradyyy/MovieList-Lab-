@extends('layouts.master')


@section('content')
<div class="card my-5">
    <div class="card-body">
        <h1>Edit New Actor</h1>

        <form action="/editActor/{{ $currActors->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="cast_id" value="{{ $currActors->id }}">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="newName" placeholder="{{ $currActors->name }}">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="newGender" placeholder="{{ $currActors->gender }}">
            </div>

            <div class="form-group">
                <label>biography</label>
                <textarea class="form-control" name="newBiography" placeholder="{{ $currActors->biography }}"></textarea>
             </div>

            <div class="form-group">
                <label>DOB</label>
                <input type="date" class="form-control" name="newDOB" placeholder="{{ $currActors->DOB }}">
            </div>
            <div class="form-group">
                <label>Place Of Birth</label>
                <input type="text" class="form-control" name="newPlaceOfBirth" placeholder="{{ $currActors->place_of_birth }}">
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="file" class="form-control" name="newCastImage">
            </div>

            <div class="form-group">
                <label>Popularity</label>
                <input type="text" class="form-control" name="newPopularity" placeholder="{{ $currActors->popularity }}">
            </div>

            <button type="submit" class="btn btn-primary mt-2 float-right">submit</button>
        </form>
    </div>
</div>
@endsection
