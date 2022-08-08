<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //
    public function verHome(){

        if(Auth::user()){
            $user=Auth()->user();
             return view('layouts.dashboard', compact('user'));
           } 
           else{
            return redirect()->route('verLogin');
           }
        
       
    }
}
