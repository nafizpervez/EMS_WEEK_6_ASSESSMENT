<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\prController;

class prmail extends Mailable
{
    use Queueable, SerializesModels;
    public $pruser;
    public $prinfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($pruser,$prinfo)
    {
        $this->pruser = $pruser;
        $this->prinfo = $prinfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.prmail')
        ->subject('Confirmation Mail For Purchase Requisition Application')
        ->with('pruser', $this->pruser)
        ->with('prinfo', $this->prinfo);
    }
}
