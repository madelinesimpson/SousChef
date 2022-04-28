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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/profile/{user}', '\App\Http\Controllers\ProfileController@index')->name('profile.show');

Route::get('/recipe/create', '\App\Http\Controllers\RecipeController@create');
Route::get('/recipe/{recipe}', '\App\Http\Controllers\RecipeController@show');
Route::post('/recipes', '\App\Http\Controllers\RecipeController@store');
Route::get('/home/test','\App\Http\Controllers\HomeController@test');

Auth::routes();



