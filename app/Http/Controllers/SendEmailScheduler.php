<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;
use Illuminate\Support\Facades\DB;
class SendEmailScheduler extends Controller
{
  function index()
  {
   return view('layout.send_scheduler');
  }

  function sendschedule(Request $request)
    {
     $this->validate($request, [
      'email'  =>  'required|email',
      'subject' => 'required',
      'message' =>  'required',
      'datetimepicker' => 'required'
     ]);

     //print_r($request->email);
      $matchThese = array('email'=>$request->email,'subject'=>$request->subject,'body'=>$request->message,'sche_time'=>$request->datetimepicker);
      DB::table('scheduleemailers')->updateOrInsert($matchThese);
      //return back()->with('success', 'Scheduler has been saved successfully')->redirect('/getscheduleremails');
     return redirect('/getscheduleremails')->with('success', 'Scheduler has been saved successfully');


    }
     function getSchedluersData()
     {
     $schedulesData= DB::table('scheduleemailers')->get();

     //return $data;
     return view('layout/get_scheduler', compact('schedulesData'));
     }
     function runSchedulerEmail()
     {
      date_default_timezone_set('Asia/Kolkata');
      $currentDateTime="2021-05-06 11:05:00";
      //$currentDateTime=date('Y-m-d H:i:s');
       // $currentDateTime= date('Y-m-d')." "."11:00";
       // echo $currentDateTime;
        $schedulesData= DB::table('scheduleemailers')->get()->toArray();
        //print_r($schedulesData);
        //die;
        foreach ($schedulesData as $list) {
           //echo  $list->sche_time;
          if($currentDateTime==$list->sche_time)
          {
               echo $list->email;
              // die();
               $sub = array(
            'subject'   =>   $list->subject

        );

        $data = array(
            'message'   =>   $list->body

        );
        $to = array(
            'email'   =>   $list->email

        );
               Mail::to($to)->send(new SendMail($data,$sub));
               return back()->with('success', 'Email has been sent successfully');
               exit;
               
          }
          //die();
        }
     }

     function multiEmails()
     {
      $fromemails = explode(',', env('ADMIN_EMAILS'));
      print_r($fromemails);
     }
}
