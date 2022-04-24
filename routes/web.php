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

// Route::get('/', function () {
//     return view('home');
// });


Auth::routes();

Route::get('/', 'HomeController@index');

Route::get('home', 'HomeController@index')->name('home');
Route::get('home/show/{id}', 'HomeController@show')->name('show');

Route::get('favorite', 'FavoriteController@index')->name('favorite');
Route::post('favorite/{cocktail}', 'FavoriteController@store')->name('favorites');
Route::post('unfavorite/{cocktail}', 'FavoriteController@destroy')->name('unfavorites');

Route::get('can-make', 'CanMakeController@index')->name('can-make');
Route::get('can-make/regist', 'CanMakeController@create')->name('ingredients-create');
Route::get('can-make/store', 'CanMakeController@store')->name('ingredients-store');
Route::get('can-make/delete', 'CanMakeController@destroy')->name('ingredients-delete');

Route::get('original', 'OriginalController@index')->name('original');
Route::get('original/create', 'OriginalController@create')->name('original-create');
Route::post('original/store', 'OriginalController@store')->name('original-store');
Route::post('original/edit/{id}', 'OriginalController@edit')->name('original-edit');
Route::post('original/update/{cocktail}', 'OriginalController@update')->name('original-update');
Route::post('original/delete/{id}', 'OriginalController@destroy')->name('original-delete');

Route::get('contact', 'ContactController@index')->name('contact');
