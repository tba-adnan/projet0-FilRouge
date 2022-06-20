<?php

use App\Http\Controllers\db_adminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\medic_dataController;
use Illuminate\Support\Facades\Auth;
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
Route::get('/eir_db', function () {
    return view('db_login');
});

Route::get('/terms', function () {
    return view('terms');
});


Auth::routes();

route::post('eir_db',[db_adminController::class,'db_login']);
route::get('/home',[HomeController::class,'search'])->name('home');
Route::resource('afficher-categorie', medic_dataController::class);

// route::get("/home/{$keyword}",[HomeController::class,'search'])->name('home');
// Route::get('/home', [A pp\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::view('register','register');
// Route::view('login','login');
// Route::post('registerUser','RestoController@registerUser');
// Route::post('loginUser','RestoController@login');