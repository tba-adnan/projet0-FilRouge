<?php

use App\Models\crudLaravel;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrudLaravelController;

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

Route::get('/index', function () {
    
    return view("pages.index");


});
// afficher data
Route::get('/table',[CrudLaravelController::class,"afficher"]);
Route::post('/ajouter',[CrudLaravelController::class,"ajouter"]);
Route::get('/suprimer/{id}',[CrudLaravelController::class,"suprimer"]);
Route::get('/modifier/{id}',[CrudLaravelController::class,"modifier_afficher"]);
Route::post('/modifierr',[CrudLaravelController::class,"modifier"])->name("modifier");

