<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function verLogin()
    {
        return view('Auth.Login');
    }
}
