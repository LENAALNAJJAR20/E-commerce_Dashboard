<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function index()
    {
        $messages = Message::all();
        return view('Message.index', compact('messages'));
    }

    public function replyForm($id)
    {
        $message = Message::findOrFail($id);
        return view('Message.reply', compact('message'));
    }

    public function sendReply(Request $request, $id)
    {
        return redirect()->route('message')->with('success', 'Reply sent successfully!');
    }

}
