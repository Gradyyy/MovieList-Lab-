@extends('layouts.master')

@section('content')

    <div class="card my-5">
        <div class="card-body">
            <h1>Edit Movie</h1>

            <form action="/editMovieDetail/{{ $currMovies->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="movie_id" value="{{ $currMovies->id }}">
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="newTitle" placeholder="{{ $currMovies->title }}">
                    @error('newTitle')
                        {{ $message }}
                    @enderror
                </div>


                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="newDescription" placeholder="New Description"></textarea>
                    @error('newDescription')
                        {{ $message }}
                    @enderror
                 </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="newGenre_id" id="genre" placeholder="Movie genre?">
                        @foreach ($currGenres as $item)
                        <option value={{ $item->id }}>{{ $item->genre }}</option>
                        @endforeach
                    </select>
                    {{-- @error('newGenre')
                        {{ $message }}
                    @enderror --}}
                </div>

                <div id="jscriptWrapper">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Actor</label>
                            <select name="newActor[]" id="actor">
                                @foreach ($currActors as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('newActor')
                            {{ $message }}
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Character Name</label>
                            <input type="text" class="form-control" name="newCharacter_name[]">
                            @error('character_name')
                            {{ $message }}
                            @enderror
                        </div>


                    </div>
                </div>
                <button id="AddMore"type="button" class="btn btn-primary mt-2 float-right">Add More</button>

                {{-- <div class="form-group">
                    <label>Actor</label>
                    <select name="actor" id="actor">
                        @foreach ($actors as $item)
                        <option value={{ $item->id }}>{{ $item->name }}</option>
                        @endforeach
                    </select>

                </div>
                <div class="form-group">
                    <label>Character Name</label>
                    <input type="text" class="form-control" name="character_name">
                </div> --}}

                <div class="form-group">
                    <label>Director</label>
                    <input type="text" class="form-control" name="newDirector" placeholder="{{ $currMovies->director }}">
                    @error('newDirector')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date" class="form-control" name="newRelease_date">
                    @error('newRelease_date')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image URL</label>
                    <input type="file" class="form-control" name="newMovie_image">
                    @error('newMovie_image')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Background</label>
                    <input type="file" class="form-control" name="newBackground_image">
                    @error('newBackground_image')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2 float-right">submit</button>
            </form>
        </div>
    </div>

    <script>
        document.getElementById("AddMore").addEventListener("click",function(){
            console.log("Test");
            document.getElementById("jscriptWrapper").innerHTML+=`<div class="form-group">
                        <div class="form-group">
                            <label>Actor</label>
                            <select name="newActor[]" id="actor">
                                @foreach ($currActors as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('newActor')
                            {{ $message }}
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Character Name</label>
                            <input type="text" class="form-control" name="newCharacter_name[]">
                            @error('newCharacter_name')
                            {{ $message }}
                            @enderror
                        </div>


                    </div>`;
        })
    </script>
@endsection
