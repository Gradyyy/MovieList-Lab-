@extends('layouts.master')

@section('content')
    <h1>Edit Profile</h1>
    <form action="/editProfile/{{ $currUsers->id }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="user_id" value="{{ $currUsers->id }}">
        <div class="form-group">
            <label>Username</label>
            <input type="text" class="form-control" name="newUsername" placeholder="{{ $currUsers->username }}">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="text" class="form-control" name="newEmail" placeholder="{{ $currUsers->email }}">
        </div>

        <div class="form-group">
            <label>DOB</label>
            <input type="date" class="form-control" name="newDOB" placeholder="{{ $currUsers->DOB }}">
        </div>

        <div class="form-group">
            <label>Phone Number</label>
            <input type="text" class="form-control" name="newPhoneNumber" placeholder="{{ $currUsers->phone_number }}">
        </div>

        {{-- <div class="form-group">
            <label>Image URL</label>
            <input type="file" class="form-control" name="cast_image">
        </div> --}}

        <button type="submit" class="btn btn-primary mt-2 float-right">Save</button>
    </form>
@endsection
