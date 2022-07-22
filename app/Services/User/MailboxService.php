<?php
namespace App\Services\User;

use Illuminate\Support\Arr;
use App\Models\Mailbox;
use App\Models\Message;
use DB;
use Auth;
use Throwable;
use App\Events\PrivateChatEvent;

/**
 * Class MailboxService
 * @package App\Services
 */
class MailboxService
{

  public function get($id)
  {
    return Mailbox::findOrFail($id);
  }

  public function addMessage($attrs, $additional = [])
  {
    $currentUser = auth()->guard('api')->user();
    $additional['user_id'] = $currentUser->id;

    $msgAttrs = Arr::get($attrs, 'messages');
    $message=Message::create(
        array_merge($msgAttrs, $additional));

    $sender=Message::with('sender.clinic')
      ->where('id',$message['id'])
      ->first();
    broadcast(new PrivateChatEvent($sender));
    return $sender;
  }

  public function createMessage($attrs)
  {
    return Message::create($attrs);
  }

  public function getMessages($where)
  {
    return Message::with('sender.clinic')
      ->where($where)
      ->get();
  }

  public function readLastMessage($where, $user)
  {
    $message_max_id = Message::where($where)->max('id');
    $where['user_id'] = $user->id;
    \DB::table('mailbox_users')
      ->where($where)
      ->update(['last_message_id' => $message_max_id]);

    return $message_max_id;
  }
}
