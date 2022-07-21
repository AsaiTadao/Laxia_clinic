<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class PrivateChatEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;


    public $message;

    public function __construct($message)
    {
        // dd($message['mailbox_id']);
        $this->message=$message;
        $this->dontBroadcastToCurrentUser();
        //
    }

    public function broadcastAs()
    {
        return 'private-chat-event';
    }

    public function broadcastOn()
    {
        return new Channel('Chat.' . $this->message['mailbox_id']);
    }
}
