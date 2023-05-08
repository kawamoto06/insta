<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', 'App\Http\Controllers\PostController@index')->middleware('web')->name('home');
Route::get('/post/create', 'App\Http\Controllers\PostController@create')->name('post.create');
Route::post('/post', 'App\Http\Controllers\PostController@store')->name('post.store');
Route::get('/test', 'App\Http\Controllers\PostController@test')->name('test');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
	
Route::get('/logout', 'Auth\LoginController@logout');
