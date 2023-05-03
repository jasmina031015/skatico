<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;



class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'message'=>$request->message
        ];
        Mail::to('jasmina031015@gmail.com')->send(new ContactMail($data));
        return redirect('/');
       /* dd($data);*/

    }
}
