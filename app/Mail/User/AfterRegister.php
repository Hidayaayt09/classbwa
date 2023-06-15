<?php

namespace App\Mail\User;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class AfterRegister extends Mailable
{
    use Queueable, SerializesModels;

    private $user;


    public function __construct($user)
    {
        $this->user = $user;
    }

    
    
    public function envelope()
    {
        return new Envelope(
            subject: 'Registration on Laracamp',
        );
    }

   
    
    public function content()
    {
        return new Content(
            markdown: 'emails.user.afterRegister',
        );
    }

   
    
    public function attachments()
    {
        return [];
    }

    public function build()
    {
        return $this->subject('Registration on Laracamp')->markdown('emails.user.afterRegister', [
            'user' => $this->user
        ]);
    }
}
