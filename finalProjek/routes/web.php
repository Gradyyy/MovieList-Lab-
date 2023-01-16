<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\WatchlistController;
use App\Http\Controllers\LogoutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[LoginController::class,'masuk']);
Route::post('/signIn',[LoginController::class,'authenticate']);

// REGISTER
Route::get('/register',[RegisterController::class,'daftar']);
Route::get('/signIn',[RegisterController::class,'login']);

Route::post('/register',[RegisterController::class,'store']);

// MAIN MENU
Route::get('/mainmenu',[MovieController::class,'index']);
Route::get('/viewGenreById/{id}',[MovieController::class,'viewGenreById']);
// ADD MOVIE
Route::get('/addMovie',[MovieController::class,'addForm'])->middleware('auth')->middleware('admin');
Route::post('/addMovie',[MovieController::class,'addMovie'])->middleware('auth')->middleware('admin');

// SHOW MOVIE DETAIL
Route::get('/showMovieList',[MovieController::class,'showMovie']);
Route::get('/movieDetail/{id}',[MovieController::class,'showMovieDetail'] );

// EDIT MOVIE
Route::get('/editMovieDetail/{id}',[MovieController::class,'editMovieForm'] );
Route::post('/editMovieDetail/{id}',[MovieController::class,'editMovie'] );

// SEARCH BAR
Route::get('/viewActorList',[CastController::class,'searchBar']);


// VIEW ACTOR
Route::get('/viewActorList',[CastController::class,'viewActor']);
Route::get('/showActorDetail/{id}',[CastController::class,'showActorDetail']);
// ADD ACTOR
Route::get('/addActor',[CastController::class,'addActorForm'])->middleware('auth')->middleware('admin');
Route::post('/addActor',[CastController::class,'addActor'])->middleware('auth')->middleware('admin');
// EDIT ACTOR ?
Route::get('/editActor/{id}',[CastController::class,'editActorForm'])->middleware('auth')->middleware('admin');
Route::post('/editActor/{id}',[CastController::class,'editActor'])->middleware('auth')->middleware('admin');

// USER
Route::get('/profile',[UserController::class,'viewProfile']);
// EDIT USER
Route::get('/editProfile/{id}',[UserController::class,'editProfileForm']);
Route::post('/editProfile/{id}',[UserController::class,'editProfileUpdate']);

// DELETE
Route::post('/deleteMovieDetail/{id}',[MovieController::class,'deleteMovie'])->middleware('auth')->middleware('admin');
Route::post('/showActorDetail/{id}',[CastController::class,'deleteActor'])->middleware('auth')->middleware('admin');
Route::post('/deleteFromWatchlist/{id}',[WatchlistController::class,'deleteFromWatchlist']);
// Watchlist
Route::get('/watchlist',[WatchlistController::class,'viewWatchlist']);
Route::get('/addToWatchlist/{id}',[WatchlistController::class,'addToWatchlist']);
Route::post('/movieDetail/{id}',[WatchlistController::class,'addMovieToWatchlist']);
Route::post('/editWatchlist/{id}',[WatchlistController::class,'editWatchlistStatus']);

//Logout
ROUTE::get('/logout', [LogoutController::class, 'signout']);












