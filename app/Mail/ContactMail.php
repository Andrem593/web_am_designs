<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $name, $email, $subject, $comments;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($datos)
    {
        $this->name = $datos['name'];
        $this->email = $datos['email'];
        $this->subject = $datos['subject'];
        $this->comments = $datos['comments'];
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->form($this->email, $this->name)->subject($this->subject)->view('view.contact');
    }
}
