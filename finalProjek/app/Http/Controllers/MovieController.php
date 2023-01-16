<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Genre;
use App\Models\Movie;
use App\Models\MovieCast;
use App\Models\MovieGenre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class MovieController extends Controller
{
    //
    public function index(){
        $jumbotron = Movie::all();
        $viewMovies = Movie::all();

        // dd($viewMovies[0]->title);
        // $x = rand(0,count($viewMovies)-1);
        // dd($x);
        return view('mainmenu',['movies' => $viewMovies, 'jumbotronMovies' => $jumbotron]);
    }

    public function addForm(){
        $viewActor = Cast::all();
        $viewGenre = Genre::all();
        return view('addMovie',['actors' => $viewActor,'genres' => $viewGenre]);
    }

    public function addMovie(Request $request){
        $validatedData = $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'director' => 'required',
            'release_date' => 'required',
            'movie_image' => 'required|mimes:png,jpg,jpeg,gif',
            'background_image' => 'required|mimes:png,jpg,jpeg,gif',
            'genre_id' => 'required'
        ]);


        $extension = $validatedData['movie_image']->getClientOriginalExtension();

        $extension2 = $validatedData['background_image']->getClientOriginalExtension();

        $x = Movie::create($validatedData);

        // $validatedData3 = $request->validate([
        //     'movie_id' => $x->id,
        //     'cast_id' => 'required',
        //     'character_name' => 'required'
        // ]);


        Movie::where('id',$x->id)->update(['movie_image' => $x->id.'m.'.$extension, 'background_image' => $x->id.'b.'.$extension2]);
        $finalFormat = $x->id.'m.'.$extension;
        $finalFormat2 = $x->id.'b.'.$extension2;
        // dd($x->id);
        // dd($finalFormat);
        $request->file('movie_image')->storeAs('movieImageFile', $finalFormat);
        $request->file('background_image')->storeAs('movieImageFile', $finalFormat2);

        MovieGenre::create(['movie_id'=> $x->id,'genre_id'=>$request->genre_id]);

        $index = 0;
        foreach($request->actor as $item ){
            MovieCast::create(['movie_id'=> $x->id, 'cast_id'=>$item,'character_name'=>$request->character_name[$index]]);
            $index++;
        }
        return redirect('/mainmenu');
    }

    public function showMovieDetail($id){

        $movieDetail = DB::table('casts')
                ->join('movie_casts', 'casts.id', '=', 'movie_casts.cast_id')
                ->join('movies','movies.id','=','movie_casts.movie_id')
                ->where('movies.id',$id)
                ->get();



        return view('movieDetail',['moviesDetail'=>$movieDetail]);
    }

    public function showMovie(Request $request){
        // $viewMovie = Movie::all();
        $searchMovie = Movie::where('title','LIKE',"%$request->search%")->paginate(10);

        return view('movieList',['movies' => $searchMovie]);
    }

    public function deleteMovie($id){
        $movieToDelete = Movie::find($id);
        $movieToDelete->delete();
        return redirect('/mainmenu');
    }

    public function editMovieForm(Request $request){
        $currMovie = Movie::find($request->id);
        $viewGenre = Genre::all();
        $viewActor = Cast::all();
        // $currMovieGenre = MovieGenre::find($request->id);
        // $currMovieCast = MovieCast::find($request->id);
        return view('editMovie',['currMovies'=> $currMovie,'currGenres'=>$viewGenre,'currActors'=>$viewActor]);
    }

    public function editMovie(Request $request){


        $validatedData = $request->validate([
            'newTitle' => 'required|min:3',
            'newDescription' => 'required',
            'newDirector' => 'required',
            'newRelease_date' => 'required',
            'newMovie_image' => 'required|mimes:png,jpg,jpeg,gif',
            'newBackground_image' => 'required|mimes:png,jpg,jpeg,gif',
            'newGenre_id' => 'required'
        ]);
        $newValidatedData = [
            'title' => $validatedData['newTitle'],
            'description' => $validatedData['newDescription'],
            'director' => $validatedData['newDirector'],
            'release_date' => $validatedData['newRelease_date'],
            'movie_image' => $validatedData['newMovie_image'],
            'background_image' => $validatedData['newBackground_image'],
            'genre_id' => $validatedData['newGenre_id']
        ];

        $newValidatedData2 =[
            'genre_id' => $request->newGenre_id,
            'movie_id' => $request->movie_id,
        ];

        $extension = $validatedData['newMovie_image']->getClientOriginalExtension();

        $extension2 = $validatedData['newBackground_image']->getClientOriginalExtension();

        Movie::where('id',$request->movie_id)->update($newValidatedData);


        Movie::where('id',$request->movie_id)->update(['movie_image' => $request->movie_id.'m.'.$extension, 'background_image' => $request->movie_id.'b.'.$extension2]);
        $finalFormat = $request->movie_id.'m.'.$extension;
        $finalFormat2 = $request->movie_id.'b.'.$extension2;

        // dd($x->id);
        // dd($finalFormat);
        $request->file('newMovie_image')->storeAs('movieImageFile', $finalFormat);
        $request->file('newBackground_image')->storeAs('movieImageFile', $finalFormat2);
        // checkpoint

        MovieGenre::where('movie_id',$request->movie_id)->update($newValidatedData2);


        // MovieCast::where('movie_id', $request->movie_id)->delete();
        // $index = 0;
        // foreach($request->newActor as $item ){
        //     MovieCast::create(['movie_id'=> $request->movie_id, 'cast_id'=>$item,'character_name'=>$request->character_name[$index]]);
        //     $index++;
        // }


        // $index = 0;
        // foreach($request->newActor as $item ){
        //     MovieCast::where(['movie_id'=> $request->movie_id],['cast_id'=>$item])->update(
        //         ['cast_id'=>$item,'character_name'=>$request->newCharacter_name[$index]],
        //     );
        //     $index++;
        // }

        $index = 0;
        foreach($request->newActor as $item ){
            MovieCast::where(['movie_id'=> $request->movie_id])->update(
                ['character_name'=>$request->newCharacter_name[$index]],
            );
            $index++;
        }


        return redirect('/mainmenu');
    }

    public function viewGenreById($id){

        $genreMovie = DB::table('genres')
            ->join('movie_genres', 'genres.id', '=', 'movie_genres.genre_id')
            ->join('movies','movies.id','=','movie_genres.movie_id')
            ->where('genres.id',$id)
            ->get();
        return view('genre',['genreMovies'=>$genreMovie]);
    }



}
