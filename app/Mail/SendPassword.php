<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Http\Request as Request;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendPassword extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

    public function __construct(object $data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('auth.emails.send-password')
            ->subject('Informations de connexion pour le site ForeverLiving')
            ->with(['user' => $this->data]);
    }
}
