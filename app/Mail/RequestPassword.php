<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request as Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RequestPassword extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('auth.emails.request-password');
    }
}
