@extends('layouts.master')

@section('content')
<div class="card my-5">
    <div class="card-body">
        <h1>Add New Actor</h1>

        <form action="/addActor" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" name="name">
            </div>

            <div class="form-group">
                <label>Gender</label>
                <input type="text" class="form-control" name="gender">
            </div>

            <div class="form-group">
                <label>biography</label>
                <textarea class="form-control" name="biography"></textarea>
             </div>

            <div class="form-group">
                <label>DOB</label>
                <input type="date" class="form-control" name="DOB">
            </div>
            <div class="form-group">
                <label>Place Of Birth</label>
                <input type="text" class="form-control" name="place_of_birth">
            </div>

            <div class="form-group">
                <label>Image URL</label>
                <input type="file" class="form-control" name="cast_image">
            </div>

            <div class="form-group">
                <label>Popularity</label>
                <input type="text" class="form-control" name="popularity">
            </div>

            <button type="submit" class="btn btn-primary mt-2 float-right">submit</button>
        </form>
    </div>
</div>
@endsection
