<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Emailtemplate;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendtemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $emailtemplates = Emailtemplate::all();
        return view('layout.sendtemplate',['emailtemplates'=>$emailtemplates, 'layout'=>'index']);
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

       Mail::to('lsdmkeke2021@gmail.com')->send(new SendMail($data,$sub));
       return back()->with('success', 'Email has been sent successfully');

      }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emailtemplate = Emailtemplate::find($id);
        return view('layout.sendtemplate',['emailtemplate'=>$emailtemplate,'layout'=>'edit']);
    }


}
