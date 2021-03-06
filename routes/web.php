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

use Illuminate\Http\Request;

Route::get('/', "PasteController@get");

Route::get('paste/{link}', "PasteController@getpaste");

Route::post('/', "PasteController@post");

Route::get('/login', "UsersController@Login");

Route::get('/signup', "UsersController@Signup");
