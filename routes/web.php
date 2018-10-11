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

Route::get('/privatePush/{message}', function ($message) {
    $user = \Illuminate\Support\Facades\Auth::user();
    broadcast(new PrivateMessageEvent($user, $message));
});