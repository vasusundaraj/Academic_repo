<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
  function index()
  {
   return view('layout.send_email');
  }

  function send(Request $request)
    {
     $this->validate($request, [
      'email'  =>  'required|email',
      'subject' => 'required',
      'message' =>  'required'
     ]);

        $sub = array(
            'subject'   =>   $request->subject

        );

        $data = array(
            'message'   =>   $request->message

        );
        $to = array(
            'email'   =>   $request->email

        );

     Mail::to($to)->send(new SendMail($data,$sub));
     return back()->with('success', 'Email has been sent successfully');

    }
}
