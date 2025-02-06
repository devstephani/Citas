<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Psy\CodeCleaner\FunctionContextPass;

class ResetPassword extends Mailable
{
    use Queueable, SerializesModels;

    public $user, $token, $email;
    /**
     * Create a new message instance.
     */
    public function __construct(string $user, string $token, string $email)
    {
        $this->user = $user;
        $this->token = $token;
        $this->email = $email;
    }

    public function build()
    {
        return $this->view('emails.reset-password')->subject('Notificación de restablecimiento de contraseña');
    }
}
