<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Mail;

class EmailController extends Controller
{
    public function create(User $user)
    {
        return view('Email.email', compact('user'));
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'email' => 'required|email',
          'subject' => 'required',
          'name' => 'required',
          'content' => 'required',
          'id' => 'required',
        ]);

        $data = [
          'subject' => $request->subject,
          'name' => $request->name,
          'email' => $request->email,
          'content' => $request->content,
          'id' => bcrypt($request->id)
        ];

        Mail::send('Email.email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject($data['subject']);
        });

        return back()->with(['message' => 'Link konfirmasi berhasil dikirim! Cek email anda'], compact('data'));
    }

}
