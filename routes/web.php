<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});


Route::get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard')->middleware('auth:web');


Route::get('/login',[AuthController::class,'login'])->name('login')->middleware('guest');
Route::post('/authenticate',[AuthController::class,'authenticate'])->name('authenticate')->middleware('guest');

Route::post('/logout',[AuthController::class,'logout'])->name('logout');
