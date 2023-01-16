<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LoginController extends Controller
{
    //
    public function masuk(){
        return view('login');
    }


    public function authenticate(Request $request){
        $valid = $request->validate([
            'email'=>['required','email:dns'],
            'password'=>['required']
        ]);
        //COOKIE
        if($request->checkbox){
            Cookie::queue('mycookie',$request->email,120);
        }

        //KALO BERHASIL
        if(Auth::attempt($valid)){
            return redirect('/mainmenu');
        }

        return back()->withErrors('loginError','login faileeddd');
    }
}
