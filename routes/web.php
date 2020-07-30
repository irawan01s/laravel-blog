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
    return view('blog.index');
});

Auth::routes();

Route::view('/blog','blog.index');
Route::get('post/create', 'PostController@create');

Route::get('/home', 'HomeController@index')->name('home');
