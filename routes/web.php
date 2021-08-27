<?php

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
})->name('home.index');

Route::resource('/members', \App\Http\Controllers\MembersController::class);

//Route::get('/login', function (){
//    return "Login mij in schatje";
//})->name('home.login');
//
//Route::get('/profile/user/{name}', function ($name){
//    return "Oeh wat zie jij er mooi uit $name";
//})->name('home.profile');
