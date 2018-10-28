<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller {
    //funzione per gestire il login
    public function doLogin(Request $request) {
        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password]')])) {
            return view('welcome');
        }
        else {
            echo "no login";
            //return redirect('signin');
        }
    }
    //funzione per gestire il logout
    public function doLogout() {
        Auth::logout();
    }
}
