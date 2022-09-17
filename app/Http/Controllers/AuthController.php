<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthController extends Controller
{
    // public function index()
    // {
    //     return view('auth.login',
    //         [
    //             'title' => 'Login',
    //             'active' => 'login',
    //         ]
    //     );
    // }

    // public function authenticate(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');


    //     if (Auth::attempt($credentials)) {
    //         // Authentication passed...
    //         if (Auth::user()->is_admin == 1) {
    //             // return redirect()->route('admin');
    //             dd('admin');
    //         }
    //     }
    //     return Redirect::to('/login')->with('error', 'Email atau Password salah');
    // }
}
