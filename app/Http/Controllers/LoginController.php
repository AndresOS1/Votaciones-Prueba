<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use App\Http\Models\User;
class LoginController extends Controller
{
    //
    public function verLogin()
    {
        return view('Auth.Login');

    }
    public function login()
    {
        if($user=User::where('userName','=',$request->userName)){   
            $validation=Validator::make($request->all(),[
                    'userName'=>'required',
                    'password'=>'required'
            ]);
            $token=$user->createToken('auth_token')->plainTextToken;
            if(Hash::check($reuqest->password,$user->password)){
                $credencials=[
                    'userName'=>$request->userName,
                    'password'=>$request->password,
                ];
                if(Auth::attempt($credencials)){
                    Alert::success('entraste satisfactoriamente');
                    return redirect()->route('home');
                }else{
                    Alert::error('contraseña incorrecta');
                   return view('Auth.Login');  
                }
            }else{
                return view('Auth.Login');
            }
        }else{
            Alert::error('nombre de usuario incorrecto');
            return view('Auth.Login');
        }
    }

    public function logout(){
          Auth::logout();

    }

}
