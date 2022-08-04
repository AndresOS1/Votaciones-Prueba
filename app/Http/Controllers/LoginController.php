<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
class LoginController extends Controller
{
    //
    public function verLogin()
    {
        return view('Auth.Login');

    }
    public function login(Request $request)
    {
        if($user=User::where('userName','=',$request->userName)->first()){
            
            if(Hash::check($request->password,$user->password))
            {
                $credenciales=[
                    'userName'=>$request->userName,
                    'password'=>$request->password
                ];
            $token=$user->createToken('auth_token')->plainTextToken;
            if(Auth::attempt($credenciales)){
                    //    return redirect()->route();

                    Alert::success('inicio de sesion correcto');
                    return redirect()->route('home', compact('user'));
            }else{

                    return  redirect()->route('verLogin');
            }
            } else{
                Alert::error('inicio de sesion incorrecto');
                return redirect()->route('verLogin');
               }
          }
           else{
              Alert::error('inicio de sesion incorrecto');
              return redirect()->route('verLogin');
            }  
    }

    public function logout(){
          Auth::logout();
          Alert::warning('Cierre de session satisfactorio');
          return redirect()->route('verLogin');
    }

}
