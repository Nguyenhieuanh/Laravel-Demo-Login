<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function userLogin(Request $request)
    {
        if ($request->username == 'admin'
            && $request->password == 'admin') {
            return view('welcome_admin');
        }

        return view('login_error');
    }
}
