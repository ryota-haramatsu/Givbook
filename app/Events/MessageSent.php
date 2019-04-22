<?php

namespace App\Events;

use App\User;
use App\Message;
use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use App\Events\MessageSent;


class MessageSent  implements ShouldBroadcast
{ 
    use Dispatchable, InteractsWithSockets, SerializesModels;

     /**
     * User that sent the message
     *
     * @var User
     */
    public $user;

    /**
     * Message details
     *
     * @var Message
     */
    public $message;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(User $user, Message $message)
    {
        $this->user = $user;
        $this->message = $message;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('chat');
    }

    /**
 * Persist message to database
 *
 * @param  Request $request
 * @return Response
 */
    public function sendMessage(Request $request)
    {
    $user = Auth::user();

    $message = $user->messages()->create([
        'message' => $request->input('message')
    ]);

    broadcast(new MessageSent($user, $message))->toOthers();

    return ['status' => 'Message Sent!'];
    }
}