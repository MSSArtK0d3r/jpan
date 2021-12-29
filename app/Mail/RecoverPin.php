<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class RecoverPin extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
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
        //return $this->from('digitalisation@sabah.gov.my', 'PIN Keselamatan anda')
        return $this->from('it@borneocode.com', 'I-KOBT PIN Keselamatan')
        ->subject('PIN Keselamatan I-KOBT anda')
        ->view('mail.pinrecover', ['mail_data' => $this->data]);
    }
}
