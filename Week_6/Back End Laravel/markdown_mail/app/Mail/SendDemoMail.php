<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendDemoMail extends Mailable
{
    use Queueable, SerializesModels;
    public $maildata;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct( $leaveuser, $leaveinfo, $conveyanceuser, $conveyanceinfo, $pruser, $prinfo)
    {
        $this->leaveuser = $leaveuser;
        $this->conveyanceuser = $conveyanceuser;
        $this->pruser = $pruser;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.sendDemoMail')
                ->with('leaveuser', $this->leaveuser)
                ->with('leaveinfo', $this->leaveinfo)
                ->with('conveyanceuser', $this->conveyanceuser)
                ->with('conveyanceinfo', $this->conveyanceinfo)
                ->with('pruser', $this->pruser)
                ->with('prinfo', $this->prinfo);

    }
}