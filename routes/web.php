<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PuestosDeVotacionesController;

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
    return redirect()->route('verLogin');
});
////Register//////
//-verRegister
Route::get('/verRegister',[RegisterController::class,'verRegister'])->name('verRegister');
Route::post('/register',[RegisterController::class,'register'])->name('register');
//login//////
//-verLogin
Route::get('/verLogin',[LoginController::class,'verLogin'])->name('verLogin');
Route::post('login',[LoginController::class,'login'])->name('login');
Route::get('/logout',[LoginController::class,'logout'])->name('cerrarSesion');
//home
Route::get('/home',[HomeController::class,'verHome'])->name('home');

//PUESTO DE VOTACIONES
Route::get('/PuestosDeVotaciones.index',[PuestosDeVotacionesController::class,'index'])->name('PuestosDeVotaciones.index');
Route::post('/PuestosDeVotaciones.create',[PuestosDeVotacionesController::class,'create'])->name('PuestosDeVotaciones.create');
Route::put('/PuestosDeVotaciones.edit',[PuestosDeVotacionesController::class,'edit'])->name('PuestosDeVotaciones.edit');
Route::delete('/PuestosDeVotaciones.destroy',[PuestosDeVotacionesController::class,'destroy'])->name('PuestosDeVotaciones.destroy');