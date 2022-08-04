<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function verHome(){

        if(Auth::user()){
            $user=Auth()->user();
             return view('layouts.home', compact('user'));
           } 
           else{
            return redirect()->route('verLogin');
           }
        
        
    }
}
