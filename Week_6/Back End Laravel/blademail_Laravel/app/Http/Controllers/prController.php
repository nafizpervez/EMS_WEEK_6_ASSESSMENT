<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\prmail;

use Mail;

class prController extends Controller
{
    public function prMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $pruser =[
            'name' => 'Random Name',
            'employee_id' => '123455',
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',


        ];
        $prinfo =[
            'application_date' => '10/10/2021',
            'serial_id' => '123456789/pr/456782021',

        ];
  
        Mail::to($email)
        ->cc('mobashyer.hossain@adntechnologies.net')
        ->bcc('nafiz.pervez@northsouth.edu')
        ->send(new prmail($pruser,$prinfo));
       
   
        dd("Mail has been sent successfully");
    }
}
