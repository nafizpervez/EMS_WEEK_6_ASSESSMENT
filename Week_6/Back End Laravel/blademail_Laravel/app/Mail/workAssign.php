<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class workAssign extends Mailable
{
    use Queueable, SerializesModels;
    public $workAssignUser;
    public $workAssignee;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($workAssignUser,$workAssignee)
    {
        $this->workAssignUser = $workAssignUser;
        $this->workAssignee = $workAssignee;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.workAssign')
        ->subject('Work Assign Alert!')
        ->with('workAssignUser', $this->workAssignUser)
        ->with('workAssignee', $this->workAssignee);
    }
}
