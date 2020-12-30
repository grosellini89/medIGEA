<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class ContactMail extends Mailable
{
    use Queueable, SerializesModels;

    public $contact;//creo un attributo
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($contact)
    {
        $this->contact=$contact;
    }

    /**
     * Build the message.
   
     */
    public function build()
    {
        return $this->from('amministrazione@medigea.com')->view('mail.contact-mail'); //vai nella view che si trova nella cartella mail nel file contact-mail 
    }
}
