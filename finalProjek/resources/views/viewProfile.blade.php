@extends('layouts.master')

@section('content')

<div class="ml-7 mt-3 mb-3">
    <h2 class="ml-7">Username:</h2>
    <h4>{{ $users->username }}</h4>
    <h2>Email:</h2>
    <h4>{{ $users->email }}</h4>
    <h2>DOB:</h2>
    <h4>{{ $users->DOB }}</h4>
    <h2>Phone Number:</h2>
    <h4>{{ $users->phone_number }}</h4>
</div>

    <a href="editProfile/{{ $users->id }}"><button class="btn btn-warning m-5">Edit Profile</button></a>
@endsection
