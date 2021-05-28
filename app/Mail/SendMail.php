<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
     public function __construct($data,$subject)
     {
         $this->data = $data;
         $this->subject = $subject;
     }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('john@webslesson.info')->subject($this->subject['subject'])->view('layout.dynamic_email_template')->with('data', $this->data);
    }
}
