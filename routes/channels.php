<?php

use Illuminate\Support\Facades\Broadcast;

use App\Models\Mailbox;
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
Broadcast::channel('Chat.{mailbox_id}', function ($user, $mailbox) {
    // if ($user->id  === $mailbox->reservation->clinic->user_id) {
    //     // dd('afa');
    //     return true;
    // }
    // return false;
    return true;
});
