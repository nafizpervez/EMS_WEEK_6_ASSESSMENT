<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\leaveApprovalMail;
use Mail;

class leaveApprovalController extends Controller
{
    public function leaveApprovalMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $leaveApprovalUser =[
            'name' => 'Random Name',
            'employee_id' => '123455',
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',
        ];
        $leaveApprovalInfo =[
            
            'leave_type' => 'sick',
            'from' => '10/12/21',
            'to' => '14/12/21s',
        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new leaveApprovalMail($leaveApprovalUser,$leaveApprovalInfo));
       
   
        dd("Mail has been sent successfully");
    }
}
