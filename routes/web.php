<?php

use App\Events\PublicMessageEvent;
use App\Events\PrivateMessageEvent;
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

Route::get('/echo', function () {
    return view('echo');
});

Route::get('/push/{message}', function ($message) {
    broadcast(new PublicMessageEvent($message));
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/privatePush/{message}/{id}', function ($message, $id) {
    $user = \App\User::find($id);
    if (empty($user)) return '无此用户';
    broadcast(new PrivateMessageEvent($user, $message));
});