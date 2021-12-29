<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendVerificationAccount extends Mailable
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
        //return $this->from('digitalisation@sabah.gov.my', 'Pengesahan I-KOBT')
        return $this->from('it@borneocode.com', 'Pengesahan I-KOBT')
        ->subject('Pengesahan akaun i-KOBT')
        ->view('mail.mail', ['mail_data' => $this->data]);
    }
}
