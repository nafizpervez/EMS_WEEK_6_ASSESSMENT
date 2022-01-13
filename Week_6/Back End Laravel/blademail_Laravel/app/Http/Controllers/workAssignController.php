<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\workAssign;
use Mail;
class workAssignController extends Controller
{
    public function workAssign()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $workAssignUser =[
            'name' => 'Named X',
            
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',


        ];
        $workAssignee =[
            'name' => 'Boss Z',
            'ending_date' => '10/10/2021',
            'work_type' => 'Enlisting the Quotas',
            'end_time' => '03:00PM',
            

        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new workAssign($workAssignUser,$workAssignee));
       
   
        dd("Mail has been sent successfully");
    }
}
