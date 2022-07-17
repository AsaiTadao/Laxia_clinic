<?php
namespace App\Services;

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
    // dd($message);
    $sender=Message::with('sender')
      ->where('id',$message['id'])
      ->first();
    broadcast(new PrivateChatEvent($sender));
    return $message;
    // return Message::create(
    //   array_merge($msgAttrs, $additional)
    // );
  }

  public function createMessage($attrs)
  {
    return Message::create($attrs);
  }

  public function getMessages($where)
  {
    return Message::with('sender')
      ->where($where)
      ->get();
  }
}
