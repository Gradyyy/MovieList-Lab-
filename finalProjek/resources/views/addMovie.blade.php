@extends('layouts.master')

@section('content')
<main class="form-addmovie w-100 m-auto">
    <div class="card my-5">
        <div class="card-body">
            <h1>Add New Movie</h1>

            <form action="/addMovie" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" name="title">
                    @error('title')
                        {{ $message }}
                    @enderror
                </div>





                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"></textarea>
                    @error('description')
                        {{ $message }}
                    @enderror
                 </div>
                <div class="form-group">
                    <label>Genre</label>
                    <select name="genre_id" id="genre" placeholder="Movie genre?">
                        @foreach ($genres as $item)
                        <option value={{ $item->id }}>{{ $item->genre }}</option>
                        @endforeach
                    </select>
                    @error('genre')
                        {{ $message }}
                    @enderror
                </div>

                <div id="jscriptWrapper">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Actor</label>
                            <select name="actor[]" id="actor">
                                @foreach ($actors as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('actor')
                            {{ $message }}
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Character Name</label>
                            <input type="text" class="form-control" name="character_name[]">
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
                    <input type="text" class="form-control" name="director">
                    @error('director')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Release Date</label>
                    <input type="date" class="form-control" name="release_date">
                    @error('release_date')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Image URL</label>
                    <input type="file" class="form-control" name="movie_image">
                    @error('movie_image')
                        {{ $message }}
                    @enderror
                </div>
                <div class="form-group">
                    <label>Background</label>
                    <input type="file" class="form-control" name="background_image">
                    @error('background_image')
                        {{ $message }}
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary mt-2 float-right">submit</button>
            </form>
        </div>
    </div>
</main>
    <script>
        document.getElementById("AddMore").addEventListener("click",function(){
            console.log("Test");
            document.getElementById("jscriptWrapper").innerHTML+=`<div class="form-group">
                        <div class="form-group">
                            <label>Actor</label>
                            <select name="actor[]" id="actor">
                                @foreach ($actors as $item)
                                <option value={{ $item->id }}>{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('actor')
                            {{ $message }}
                            @enderror

                        </div>
                        <div class="form-group">
                            <label>Character Name</label>
                            <input type="text" class="form-control" name="character_name[]">
                            @error('character_name')
                            {{ $message }}
                            @enderror
                        </div>


                    </div>`;
        })
    </script>
@endsection

