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
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'ArticleController@index')->name('articles.index');
Route::resource('/articles', 'ArticleController')->except(['index']);
Route::resource('/articles', 'ArticleController')->only(['create','store'])->middleware('auth');

Route::group(['prefix' => 'games'], function () {
    Route::get('index', 'GameController@index')->name('games.index');
    Route::get('show/{id}', 'GameController@show')->name('games.show');
});