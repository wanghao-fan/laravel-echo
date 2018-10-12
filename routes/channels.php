<?php

/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});

Broadcast::channel('privatePush.{id}', function ($user, $id) {
    \Illuminate\Support\Facades\Log::info('12312312312312312321');
    \Illuminate\Support\Facades\Log::info('type:'. (int) $user->id === (int) $id);
    return (int) $user->id === (int) $id;
});