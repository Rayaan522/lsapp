<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;


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
    return view(' dashboard') ;
});
Route::get('/home', function () {
    return view('home')->name('home');
});

Route::get('/posts',function(){
    return view('posts.index');
});
Route::get('/dashboard','DashboardController@index')->name('dashboard')
->middleware('auth');

//Register Routes

Route::get('/register','Auth\RegisterController@index')->name('register')->middleware('guest');
Route::post('/register','Auth\RegisterController@store')->name('register');

//Login Routes
Route::get('/login','Auth\LoginController@index')->name('login');
Route::post('/login','Auth\LoginController@store')->name('login');

//Logout Routes

Route::post('/logout','Auth\LogoutController@index')->name('logout');

// Post Routes
Route::get('/posts','PostController@index')->name('posts');
Route::get('/posts/{post}','PostController@show')->name('posts.show');
Route::post('/posts','PostController@store');

//PostLike Routes
Route::post('/posts/{post}/likes','PostLikeController@store')->name('posts.likes')
->middleware('auth');

//PostUnlike Routes
Route::delete('/posts/{post}/likes','PostLikeController@destroy')->name('posts.likes')
->middleware('auth');

// Post Delete Route
Route::delete('/posts/{post}','PostController@destroy')->name('posts.destroy');

//Listing UserPosts Routes
Route::get('/users/{user}/posts','UserPostController@index')->name('users.posts');
