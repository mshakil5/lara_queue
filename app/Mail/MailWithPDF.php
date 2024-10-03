<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class MailWithPDF extends Mailable
{
    use Queueable, SerializesModels;
    public $array;

    /**
     * Create a new message instance.
     */
    
    public function __construct($array)
     {
         $this->array = $array;
     }

    public function build()
     {
        return $this->view($this->array['view'])
                     ->from($this->array['from'],'TEST')
                     ->subject($this->array['subject'])
                     ->attach($this->array['file'],['as'=>$this->array['file_name'], 'mime'=>'application/pdf']);
     }
}
