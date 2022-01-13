<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class conApprovalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $conApprovalUser;
    public $conApprovalInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($conApprovalUser,$conApprovalInfo)
    

    {
        $this->conApprovalUser = $conApprovalUser;
        $this->conApprovalInfo = $conApprovalInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.conApprovalMail')
        ->subject('Approval For Conveyance Bill')
        ->with('conApprovalUser', $this->conApprovalUser)
        ->with('conApprovalInfo', $this->conApprovalInfo);
    }
}
