<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\leaveController;

class leavemail extends Mailable
{
    use Queueable, SerializesModels;
    public $leaveuser;
    public $leaveinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($leaveuser,$leaveinfo)
    {
        $this->leaveuser = $leaveuser;
        $this->leaveinfo = $leaveinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.leavemail')
        ->subject('Confirmation Mail For Leave Application')
        ->with('leaveuser', $this->leaveuser)
        ->with('leaveinfo', $this->leaveinfo);
    }
}
