<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\prApprovalMail;
use Mail;
class prApprovalController extends Controller
{
    public function prApprovalMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $prApprovalUser =[
            'name' => 'Random Name',
            'employee_id' => '123455',
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',


        ];
        $prApprovalInfo =[
            'application_date' => '10/10/2021',
            'serial_id' => '123456789/pr/456782021',

        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new prApprovalMail($prApprovalUser,$prApprovalInfo));
       
   
        dd("Mail has been sent successfully");
    }
}
