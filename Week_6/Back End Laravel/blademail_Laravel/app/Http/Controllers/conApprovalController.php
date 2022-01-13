<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\conApprovalMail;
use Mail;
class conApprovalController extends Controller
{
    public function conApprovalMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $conApprovalUser =[
            'name' => 'Random Name',
            
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',


        ];
        $conApprovalInfo =[
            'id'=>'Random4567890',
            'application_date' => '10/10/2021',
            'conveyance_type' => 'overtime',
            'in_time' => '09:00AM',
            'out_time' => '12:00PM',
            'from' => 'Uttara',
            'to' => 'Mohakhali',
            'payable_amount' => '3000BDT',

        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new conApprovalMail($conApprovalUser,$conApprovalInfo));
       
   
        dd("Mail has been sent successfully");
    }
}
