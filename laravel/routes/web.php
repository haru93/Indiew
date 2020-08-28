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

Route::group(['prefix' => 'comments', 'middleware' => 'auth'], function() {
    Route::post('store', 'CommentController@store')->name('comments.store');
});


/*
|--------------------------------------------------------------------------
| Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('login', 'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'Admin\LoginController@login');
});

/*
|--------------------------------------------------------------------------
| Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout', 'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home', 'Admin\HomeController@index')->name('admin.home');
    Route::get('games/create', 'GameController@create')->name('admin.games.create');
    Route::post('games/store', 'GameController@store')->name('admin.games.store');
});