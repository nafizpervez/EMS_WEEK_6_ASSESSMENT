<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\leaveApprovalController;
class leaveApprovalMail extends Mailable
{
    use Queueable, SerializesModels;
    public $leaveApprovalUser;
    public $leaveApprovalInfo;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($leaveApprovalUser,$leaveApprovalInfo)
    {
        $this->leaveApprovalUser = $leaveApprovalUser;
        $this->leaveApprovalInfo = $leaveApprovalInfo;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.leaveApprovalMail')
        ->subject('Approval For Leave Application')
        ->with('leaveApprovalUser', $this->leaveApprovalUser)
        ->with('leaveApprovalInfo', $this->leaveApprovalInfo);
    }
}
