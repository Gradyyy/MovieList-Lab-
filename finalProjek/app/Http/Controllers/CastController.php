<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use App\Models\Movie;
use App\Models\MovieCast;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CastController extends Controller
{
    //
    public function viewActor(Request $request){

        $searchActor = Cast::where('name','LIKE',"%$request->search%")->paginate(10);
        // $searchActor = Cast::where('name','LIKE',"%$request->search%")->paginate(10);
        // $viewActor = Cast::paginate(10);
        return view('actorList',['actors' => $searchActor]);
    }

    public function showActorDetail($id){
        // dd('berhasil');
        // $actorDetail = Cast::find($id);

        // $movie = Movie::all();

        $castMovie = DB::table('casts')
                ->join('movie_casts', 'casts.id', '=', 'movie_casts.cast_id')
                ->join('movies','movies.id','=','movie_casts.movie_id')
                ->where('casts.id',$id)
                ->get();


        return view('actorDetail',['movies'=>$castMovie]);
    }

    public function addActorForm(){
        return view('addActor');
    }

    public function addActor(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'gender' => 'required|in:Male,Female',
            'biography' => 'required',
            'DOB' => 'required',
            'place_of_birth' => 'required',
            'cast_image' => 'required|mimes:png,jpg,jpeg,gif',
            'popularity' => 'required|integer'
        ]);
        $extension = $validatedData['cast_image']->getClientOriginalExtension();

        $x = Cast::create($validatedData);
        Cast::where('id',$x->id)->update(['cast_image' => $x->id.'a.'.$extension]);
        $finalFormat = $x->id.'a.'.$extension;
        // dd($x->id);
        // dd($finalFormat);
        $request->file('cast_image')->storeAs('castImageFile', $finalFormat);

        return redirect('/mainmenu');


    }

    public function editActorForm(Request $request){
        $currActor = Cast::find($request->id);
        return view('editActor',['currActors'=> $currActor]);
    }


    //NEED IMAGE FIXATION
    public function editActor(Request $request){
        $profile = $request->validate([
            'newName'=>'required|min:3',
            'newGender'=>'required',
            'newBiography' => 'required',
            'newDOB'=>'required',
            'newPlaceOfBirth' => 'required',
            'newCastImage' => 'required|mimes:png,jpg,jpeg,gif',
            'newPopularity' => 'required|integer'
        ]);
        $newProfile = [
            'name'=>$profile['newName'],
            'gender'=>$profile['newGender'],
            'biography' => $profile['newBiography'],
            'DOB'=>$profile['newDOB'],
            'place_of_birth' => $profile['newPlaceOfBirth'],
            'cast_image' => $profile['newCastImage'],
            'popularity' => $profile['newPopularity']
        ];



        $extension = $newProfile['cast_image']->getClientOriginalExtension();

        Cast::where('id',$request->cast_id)->update($newProfile);
        Cast::where('id',$request->cast_id)->update(['cast_image' => $request->cast_id.'a.'.$extension]);
        $finalFormat = $request->cast_id.'a.'.$extension;


        $request->file('newCastImage')->storeAs('castImageFile', $finalFormat);

        return redirect('/mainmenu');
    }

    public function deleteActor($id){
        $actorToDelete = Cast::find($id);
        $actorToDelete->delete();
        return redirect('/mainmenu');
    }

    // public function searchBar(Request $request){
    //     $searchActor = Cast::where('name','LIKE',"%$request->search%")->paginate(10);
    //     return view('searched',['searchActors'=>$searchActor]);
    // }



}
