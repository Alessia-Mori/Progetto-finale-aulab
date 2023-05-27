<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Foundation\Auth\User;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     */
    public $user, $data; 
    public function __construct(User $user, $data)
    {
        $this->data = $data;
        $this->user = $user;
    }

    /**
     * Get the message envelope.
     */
    public function build(){
        return $this->from('presto.it@noreply.com')->view('mail.become_revisor');
    }
}
