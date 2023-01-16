<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    public function signout(Request $r){
        Auth::guard(name: 'web')->logout();
        $r->session()->invalidate();
        $r->session()->regenerateToken();

        return redirect('/signIn');
    }
}
