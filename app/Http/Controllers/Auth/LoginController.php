<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function get()
    {
        return view('pages.login');
    }

    public function post(Request $request)
    {
        $credentials = [
            'email' => $request->input('email'),
             'password' => $request->input('password')
        ];

        if(Auth::attempt($credentials)) {
            return redirect('/');
        } else {
             return view('pages.login', [
                 'loginFailed' => true
             ]);
        }
    }
}
