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

// Route::get('/', function () {
//     return view('employe.index');
// });


Route::get('/', 'App\Http\Controllers\RecipieController@index')->name('recipie.index');
Route::get('/add-recipie', 'App\Http\Controllers\RecipieController@create')->name('recipie.create');
Route::get('/edit-recipie/{recipie}', 'App\Http\Controllers\RecipieController@edit')->name('recipie.edit');
Route::get('/show-recipie/{recipie}', 'App\Http\Controllers\RecipieController@show')->name('recipie.show');
Route::Post('/store-recipie', 'App\Http\Controllers\RecipieController@store')->name('recipie.store');
Route::Post('/update-recipie/{recipie}', 'App\Http\Controllers\RecipieController@update')->name('recipie.update');
Route::Post('/search-recipie/', 'App\Http\Controllers\RecipieController@search')->name('recipie.search');
Route::get('/delete-recipie/{recipie}', 'App\Http\Controllers\RecipieController@destroy')->name('recipie.destroy');
