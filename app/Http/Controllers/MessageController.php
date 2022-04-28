<?php

namespace App\Http\Controllers;
use App\Models\Messages;

use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function send_message()
    {
        $message = Messages::find(1);
        $message->message = request('message');
        $message->save();

        return view('message_form');
        
    }

    public function get_message()
    {
        $message = Messages::find(1);

        return $message;
        
    }
}


