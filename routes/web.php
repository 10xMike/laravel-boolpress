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

Route::get('/', 'PageController@index')->name('home');

//Auth
Auth::routes();

//Admin Routes
Route::prefix('admin')
    ->namespace('Admin')
    ->middleware('auth')
    ->name('admin.')
    ->group(function () {
        Route::get('/', 'HomeController@index')->name('dashboard'); //admin.dashboard
        Route::resource('posts', PostController::class);
    });

//Guests Routes
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');

// Categories Routes
/* Route::get('categories/{category:slug}', 'x@show'); */

/* Altre Pagine non connesse ad un entitá/modello  */
Route::get('/', 'PageController@index');
Route::get('about', 'PageController@about');
Route::get('contacts', 'PageController@contacts');

/* Posts per l'utente */
Route::get('posts', 'PostController@index')->name('posts.index');
Route::get('posts/{post}', 'PostController@show')->name('posts.show');