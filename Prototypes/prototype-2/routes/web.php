<?php

use App\Http\Controllers\admincontroller;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\galerieConrtoller;
use App\Http\Controllers\PlaceController;
use Database\Factories\CategoriesFactory;
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

// Route::get('/inserte-endroit', function () {  
//     return view('pages.inserte-endroit');
//     });
// Route::get('/edit-endroit', function () {  
//     return view('pages.edit-endroit');
//     });
// Route::get('/inserte-categorie', function () {  
//     return view('pages.inserte-categorie');
//     });
// Route::get('/edit-categorie', function () {  
//     return view('pages.edit-categorie');
//     });
// Route::get('/tableau-endroit', function () {  
//     return view('pages.tableau-endroit');
//     });
Route::get('/', function () {  
    return view('pages.login');
    });


    route::post('/',[admincontroller::class,'login']);
// route::get('/afficher',[CategorieController::class,'index']);
   
Route::resource('afficher-categorie', CategorieController::class);
Route::resource('afficher-endroit', PlaceController::class);
Route::resource('afficher-galerie', galerieConrtoller::class);

