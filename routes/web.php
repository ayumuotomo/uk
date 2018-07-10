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

Route::get('/', function () {
    return view('welcome');
});

Route::get('signup', 'Auth\RegisterController@showRegistrationForm')->name('signup.get');
Route::post('signup', 'Auth\RegisterController@register')->name('signup.post');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login')->name('login.post');
Route::get('logout', 'Auth\LoginController@logout')->name('logout.get');
 Route::resource('users', 'UsersController', ['only' => ['show']]);

Route::get('posts/{category}', 'PostsController@index');

Route::get('subcategory.books', function(){
    return view('subcategory.books');
});
Route::get('subcategory.leisure', function(){
    return view('subcategory.leisure');
});
Route::get('subcategory.food', function(){
    return view('subcategory.food');
});
Route::get('subcategory.movie', function(){
    return view('subcategory.movie');
});
Route::get('subcategory.music', function(){
    return view('subcategory.music');
});
Route::get('subcategory.textbook', function(){
    return view('subcategory.textbook');
});
Route::get('subcategory.sports', function(){
    return view('subcategory.sports');
});
Route::get('subcategory.others', function(){
    return view('subcategory.others');
});