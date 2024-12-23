<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use App\Http\Controllers\walletcontrolla;
use Illuminate\Mail\Mailables\Content;

use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class RequestReceived extends Mailable
{
    use Queueable, SerializesModels;

    // private $posted;

    /**
     * Create a new message instance.
     */
     
    public function  __construct(private  $posted)
    {
        //
        // $this->posted = $posted;
 
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'NewPhrase',
        );
    }

   

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $data = $this->posted;
        return new Content(
            view: 'home.mail',
            with: [
                'data' => $data,

            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
