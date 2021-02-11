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
//     return view('welcome');
// });
Route::get('/', 'FoodController@index')->name('foods');
Route::get('/foods', 'FoodController@create')->name('foods.create');
Route::post('/foods', 'FoodController@store');
Route::get('/foods/{id}', 'FoodController@edit')->name('foods.edit');
Route::put('/foods/{id}', 'FoodController@update');
Route::delete('/foods/{id}', 'FoodController@destroy')->name('foods.delete');
