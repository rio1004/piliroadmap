<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class FeedbackMail extends Mailable
{
    use Queueable, SerializesModels;

    public $user_name;
    public $email;
    public $departmentEmail;
    public $feedback;
    public $subject;
    public $departmentName;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($user_name,$email, $departmentEmail, $feedback, $subject, $departmentName)
    {
        $this->email = $email;
        $this->user_name = $user_name;
        $this->departmentEmail = $departmentEmail;
        $this->subject  = $subject;
        $this->feedback = $feedback;
        $this->departmentName = $departmentName;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('feedback ');
    }
}
