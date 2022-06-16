<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Users Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your module. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

ladmin()->route(function() {
    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/', function () {
            return view('users::welcome');
        })->name('home');
    });
});
