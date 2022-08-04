<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\User;


class RegisterController extends Controller
{
    public function verRegister()
    {
       return view('Auth.Register');
    }
    public function register()
    {
         if(!$user_name=User::where('userName','=',$request->userName)){   
                $validation=Validator::make($request->all(),[
                    'avatar '=>'required',
                    'userName'=>'required',
                    'nombres'=>'required',
                    'apellidos'=>'required',
                    'celular'=>'required',
                    'password'=>'required'
                ]);
                if(!$validation->fails()){
                    $user=new User;
                    if($request->hasFile('avatar')){
                        $avatar=$request->file('avatar')->store('pulic/storage/avatar');
                        $url=Storage::url($avatar);
                        $user->avatar=$request->$url;
                        $user->userName=$request->$userName;
                        $user->nombres=$request->nombres;
                        $user->apellidos=$request->apellidos;
                        $user->celular=$request->celular;
                        $user->save();
                        Alert::success('ingreso satisfactoriamente');
                        return redirect()->route('home');
                    }
                }else{
                    Alert::error('falta un campo');
                    return view('Auth.Register');
                }
            }else{
                Alert::error('el nombre de usuario ya existe');
                return view('Auth.Register');
            }
    }
}
