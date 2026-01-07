<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        Mail::send('pages.intro.contact', $data, function ($mail) use ($data) {
            $mail->to('hnarfr20063@gmail.com')
                ->subject($data['subject'])
                ->replyTo($data['email'], $data['name']);
        });

        return back()->with('success', 'تم إرسال رسالتك بنجاح');
    }
}
