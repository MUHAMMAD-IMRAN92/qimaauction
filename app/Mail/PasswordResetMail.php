<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class PasswordResetMail extends Mailable
{
    use Queueable, SerializesModels;

    public $customer;
    public $token;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($customer,$token)
    {
        $this->customer = $customer;
        $this->token    = $token;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.passwordreset');
    }
}
