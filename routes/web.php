<?php

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

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Authentication
Auth::routes(['register' => false]);

// Home
Route::get('/', 'HomeController');
Route::get('/about', 'AboutController');

// Notes
Route::get('/notes/{schoolYear}/{class}/{author}/{resource}/assets/{image}', 'Pro\NotesController@serveImage');
Route::get('/notes/{schoolYear}/{class}/{author}/{resource}', 'Pro\NotesController@navigate');
Route::get('/notes/{schoolYear}/{class}/{author}/{resource}/{file}', 'Pro\NotesController@renderFile');

// Categories
Route::any('/{requestUri}', 'CategoryController@render')
    // Except files and api routes
    ->where('requestUri', '^(?!api).*$');
