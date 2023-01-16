<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function viewProfile(){
        $findUser = User::find(Auth::user()->id);

        return view('viewProfile',['users' => $findUser]);
    }

    public function editProfileForm(){
        $currUser = User::find(Auth::user()->id);
        return view('editProfile',['currUsers' => $currUser]);
    }

    public function editProfileUpdate(Request $request){
        // $validatedData = $request->validate([
        //     'username' => 'required',
        //     'email' => 'required',
        //     'DOB' => 'required',
        //     'phone_number' => 'required'
        // ]);

        $profile = $request->validate([
            'newUsername'=>'required',
            'newEmail'=>'required',
            'newDOB' => 'required',
            'newPhoneNumber'=>'required'
        ]);
        $newProfile = [
            'username'=>$profile['newUsername'],
            'email'=>$profile['newEmail'],
            'DOB' => $profile['newDOB'],
            'phone_number'=>$profile['newPhoneNumber']
        ];
        User::where('id',Auth::user()->id)->update($newProfile);

        return redirect('/mainmenu');

    }
}
