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

    protected $data;

    public function __construct(array $data)
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
        return $this->markdown('auth.emails.request-password')
            ->subject("Demande de mot de passe enregistrée")
            ->with(['data' => $this->data]);
    }
}
