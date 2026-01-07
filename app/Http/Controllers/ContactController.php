<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Resend as GlobalResend;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'subject' => 'required|string|max:150',
            'message' => 'required|string|max:2000',
        ]);

        try {
            $resend = GlobalResend::client(config('services.resend.key'));

            $resend->emails->send([
                'from' => config('app.name').' <onboarding@resend.dev>',
                'to' => ['hnarfr20063@gmail.com'],
                'subject' => $data['subject'],
                'reply_to' => $data['email'],
                'html' => view('pages.intro.contact', $data)->render(),
            ]);

            return back()->with('success', 'تم إرسال رسالتك بنجاح ✅');

        } catch (\Throwable $e) {
            return back()->with('error', 'فشل إرسال الرسالة ❌');
        }
    }
}
