<?php

namespace App\Mail\Checkout;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Http\Models\Camps;
use App\Http\Models\User;

class AfterCheckout extends Mailable
{
    use Queueable, SerializesModels;

    private $checkout;
    
    public function __construct($checkout)
    {
        $this->checkout = $checkout;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    // public function envelope()
    // {
    //     return new Envelope(
    //         subject: 'Register Camp',
    //     );
    // }

    // /**
    //  * Get the message content definition.
    //  *
    //  * @return \Illuminate\Mail\Mailables\Content
    //  */
    // public function content()
    // {
    //     return new Content(
    //         markdown: 'emails.checkout.afterCheckout',
    //     );
    // }

    // /**
    //  * Get the attachments for the message.
    //  *
    //  * @return array
    //  */
    // public function attachments()
    // {
    //     return ['checkout' => $this->checkout];
    // }

    public function build()
    {
        return $this->subject("Register Camp: {$this->checkout->Camp->title}")->markdown('emails.checkout.afterCheckout', [
            'checkout' => $this->checkout
        ]);
    }
}
