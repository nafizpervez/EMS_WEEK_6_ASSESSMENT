<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;


class conveyancemail extends Mailable
{
    use Queueable, SerializesModels;
    public $conveyanceuser;
    public $conveyanceinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($conveyanceuser,$conveyanceinfo)
    {
        $this->conveyanceuser = $conveyanceuser;
        $this->conveyanceinfo = $conveyanceinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.conveyancemail')
        ->subject('Confirmation Mail For Conveyance Bill Application')
        ->with('conveyanceuser', $this->conveyanceuser)
        ->with('conveyanceinfo', $this->conveyanceinfo);
    }
}
