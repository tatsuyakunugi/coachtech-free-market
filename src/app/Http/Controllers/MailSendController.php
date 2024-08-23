<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Mail\SendNoticeMail;
use Mail;
use App\Http\Requests\MailSendRequest;
use App\Models\User;

class MailSendController extends Controller
{
    public function mailCreate()
    {
        return view('admin/mail/mail');
    }

    public function send(MailSendRequest $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        $to = User::all();

        Mail::to($to)->send(new SendNoticeMail($data));
        return view('admin/mail/complete');
    }
}
