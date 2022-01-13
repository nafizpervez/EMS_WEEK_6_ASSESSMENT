<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\leavemail;
use Mail;

class leaveController extends Controller
{
    public function leaveMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $leaveuser =[
            'name' => 'Random Name',
            'employee_id' => '123455',
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',
        ];
        $leaveinfo =[
            
            'leave_type' => 'sick',
            'from' => '10/12/21',
            'to' => '14/12/21s',
        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new leavemail($leaveuser,$leaveinfo));
       
   
        dd("Mail has been sent successfully");
    }
}
