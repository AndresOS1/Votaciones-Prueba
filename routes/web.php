<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;

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
//-verRegister
Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('/register',[RegisterController::class,'register'])->name('register');
//login//////
//-verLogin
Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');
//home
Route::get('/home',[HomeController::class,'verHome'])->name('home');
