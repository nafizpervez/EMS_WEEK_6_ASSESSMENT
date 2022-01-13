<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\prApprovalController;

class prApprovalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $prApprovalUser;
    public $prApprovalInfo;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($prApprovalUser,$prApprovalInfo)
    {
        $this->prApprovalUser = $prApprovalUser;
        $this->prApprovalInfo = $prApprovalInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.prApprovalMail')
        ->subject('Pr Approval Notification')
        ->with('prApprovalUser', $this->prApprovalUser)
        ->with('prApprovalInfo', $this->prApprovalInfo);
        ;
    }
}
