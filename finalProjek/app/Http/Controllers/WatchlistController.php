<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Watchlist;
use Illuminate\Http\Request;
use App\Models\MovieWatchlist;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;


class WatchlistController extends Controller
{
    //
    public function viewWatchlist(Request $request){

        // $watchlist = MovieWatchlist::where('user_id',Auth::user()->id)->get();

        // $searchCombined = DB::table('movies')
        //     ->leftJoin('movie_watchlists', 'movies.id', '=', 'movie_watchlists.movie_id')
        //     ->get();

        // $movie = Movie::all();

        // $watchlist = Watchlist::all();

        // $join = compact(movie,watchlist);


        $movies = DB::table('movies')
                ->join('movie_watchlists', 'movies.id', '=', 'movie_watchlists.movie_id')
                ->where('title','LIKE',"%$request->search%")
                ->paginate(5);
        // $searchCombined = Watchlist::where('title','LIKE',"%$request->search%")->paginate(4);

        // return view('viewWatchlist',['watchlists' => $movies]);
        // $watchlist = Watchlist::where(Auth::user()->id)->get();
        return view('viewWatchlist',['watchlists'=>$movies]);
    }

    public function addToWatchlist($id){
        DB::table('movie_watchlists')->insert([
            'user_id' => Auth::user()->id,
            'movie_id' => $id,
            'status'=> 'planning'
        ]);

        return redirect('/mainmenu');
    }

    public function editWatchlistStatus(Request $request,$id){
        if($request->status == '1'){
            $status = 'Pending';
        } else if ($request->status == '2'){
            $status = 'Ongoing';
        } else if ($request->status == '3'){
            $status = 'Watched';
        } else{
            $status = 'Planning';
        }

        DB::table('movie_watchlists')->where([['user_id',Auth::user()->id],['movie_id',$id]])->update(['status' => $status
        ]);

        return redirect('/watchlist');
    }

    public function deleteFromWatchlist($id){
        $watchlist = MovieWatchlist::find($id);
        $watchlist->delete();
        return redirect('/mainmenu');
    }

}
