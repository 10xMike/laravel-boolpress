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

Route::get('/', 'PageController@index')->name('index');

//Auth
Auth::routes();

//Admin Routes
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('home');
    });

//Guests Routes
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{id}', 'PostController@show')->name('posts.show');