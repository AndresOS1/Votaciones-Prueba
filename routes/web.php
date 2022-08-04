<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
<<<<<<< HEAD
=======
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
>>>>>>> 2ff2c35b64524c56263b484578ea2801d950baec

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('verRegister');
});
////Register//////
<<<<<<< HEAD
Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
=======
//-verRegister
Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('/register',[RegisterController::class,'register'])->name('register');
//login//////
//-verLogin
Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');

//home
Route::get('/home',[HomeController::class,'home'])->name('home');
>>>>>>> 2ff2c35b64524c56263b484578ea2801d950baec
