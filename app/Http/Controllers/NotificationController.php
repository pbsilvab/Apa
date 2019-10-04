<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Message;
use App\User;
use App\Notifications\NewMessage;
use Illuminate\Support\Facades\Notification;
use App\Events\MessagePushed;


class NotificationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    public function index()
    {
        // user 2 sends a message to user 1
        $message = new Message;
        $message->setAttribute('from', 1);
        $message->setAttribute('to', 1);
        $message->setAttribute('message', 'Demo message from user 2 to user 1.');
        $message->save();
         
        $fromUser = User::find(1);
        $toUser = User::find(1);
         
        // send notification using the "user" model, when the user receives new message
        $toUser->notify(new NewMessage($fromUser));
         
        // send notification using the "Notification" facade
        Notification::send($toUser, new NewMessage($fromUser));
    }


    public function contacts(){

        $usuarios = User::where('id', '!=', \Auth::user()->id)->get();

        $unreadMessages = Message::select(\DB::raw('`from` as sender_id, count(`from`) as messages_count'))
                            ->where('to', \Auth::user()->id)
                            ->groupBy('from')
                            ->get();

        $usuarios = $usuarios->map(function($usuario) use($unreadMessages){
            $userUnread = $unreadMessages->where('sender_id', $usuario->id)->first();

            $usuario->unread = $userUnread ?  $userUnread->messages_count : 0;

            return $usuario;

        });

        return response()->json($usuarios);
    }

    public function messages($id){

        $updated = Message::where('from', $id)->where('to', auth()->id())->update(['read'=> true]);
       // dd($updated);

        $messages = Message::where(function($q) use($id){
            $q->where('from', auth()->id());
            $q->where('to', $id);
        })
        ->orwhere(function($q) use($id){
            $q->where('from',  $id);
            $q->where('to',  auth()->id());
        })->get();

        return response()->json($messages);
        
    }

    public function savemessages(Request $request){

        $mensaje = $request->text;
        $to = $request->contact_id;
        $from = \Auth::user()->id;

        $message = new Message;
        $message->setAttribute('from', $from);
        $message->setAttribute('to', $to);
        $message->setAttribute('message', $mensaje);
        $message->save();

        broadcast(new MessagePushed($message));

        return response()->json($message);

    }

}
