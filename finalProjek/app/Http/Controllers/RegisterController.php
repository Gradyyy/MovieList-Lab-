<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    //
    public function daftar(){
        return view('register');
    }

    public function login(){
        return view('login');
    }

    public function store(Request $request){
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'DOB' => 'required',
            'phone_number' => 'required'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        // $users = new User();
        // $users->name = $validatedData['name'];
        // $users->username = $validatedData['username'];
        // $users->email = $validatedData['email'];
        // $users->password = bcrypt($validatedData['password']);
        // $users->save();

        User::create($validatedData);

        // flash data
        // session()->flash('success', 'berhasil');
        // if($validatedData){
        //     Session::flash('status','success');
        //     Session::flash('message','REGISTER SUCCESSFUL');
        // }

        return redirect('/signIn');
    }
}
