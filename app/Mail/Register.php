<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class Register extends Mailable
{
    
    use Queueable, SerializesModels;
    public $utilisateur;
    

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($utilisateur)
    {
        $this->user = $utilisateur;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('/email/register')
        ->from('mihin.aime@gmail.com','Mihin')
        ->subject('Bienvenue sur Simplon');
      
    }
}
