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
use App\Models\User;


class RegisterController extends Controller
{
    public function verRegister()
    {
       return view('Auth.Register');
    }
    public function register(Request $request)
    {
        
                $validation=Validator::make($request->all(),[
                    'nombres'=>'required',
                    'apellidos'=>'required',
                    'celular'=>'required',
                    'avatar '=>'required',
                    'userName'=>'required',
                    'password'=>'required'
                ]);
            if(!$userName=User::where('userName','=',$request->userName)->first()){   
                if($validation){
                    $user=new User;
                    if($request->hasFile('avatar')){
                        $avatar=$request->file('avatar')->store('public/avatar');
                        $url=Storage::url($avatar);
                        $user->avatar=$url;
                        $user->userName=$request->userName;
                        $user->nombres=$request->nombres;
                        $user->apellidos=$request->apellidos;
                        $user->celular=$request->celular;
                        $user->password=Hash::make($request->password);
                        $user->save();
                        Alert::success('ingreso satisfactoriamente');
                        return redirect()->route('verLogin');
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
