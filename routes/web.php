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

use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Route::namespace('User')->group(function (){
    Auth::routes();
});
//Route::get('/login', 'User\LoginController')->name('user.auth.login');
Route::middleware('auth.user')->group(function () {
    Route::get('/home', 'User\HomeController@showHome')->name('show.home');
    Route::post('/tweet', 'User\HomeController@createTweet')->name('create.tweet');
});
Route::get('/profile/{email}', 'User\HomeController@showProfile')->name('show.profile');





//Route::get('/login', 'LoginController')->name('user.auth.login');
