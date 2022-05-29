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
Route::get('/{user_id}', 'User\HomeController@showProfile')->name('show.profile');
//プロフィール画面のタブ
Route::get('/{user_id}/with_replies')->name('show.replies');
Route::get('/{user_id}/media')->name('show.media');
Route::get('/{user_id}/likes')->name('show.likes');


Route::get('/{user_id}/status/{tweet_id}')->name('show.tweet'); //ツイートの拡大(詳細)

Route::get('/i/bookmarks')->name('show.bookmarks'); //ブックマーク一覧
Route::get('/search')->name('show.search'); //?

Route::get('/explore')->name('show.explore'); //なんかトレンドとか
Route::get('/notifications')->name('show.notifications'); //アカウント向けの通知一覧
Route::get('/messages')->name('show.messages'); //DM
Route::get('{user_id}/lists')->name('show.lists'); //厳選したタイムライン

Route::get('/i/events/{event_id}')->name('show.events'); //ツイートまとめ


