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

// Route::get('/cutie', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/terms', function () {
    return view('terms');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Route::view('register','register');
// Route::view('login','login');
// Route::post('registerUser','RestoController@registerUser');
// Route::post('loginUser','RestoController@login');