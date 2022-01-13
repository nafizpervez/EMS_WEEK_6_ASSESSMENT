<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Mail\SendDemoMail;
use Mail;

class ContactController extends Controller
{
    public function sendDemoMail()
    {
        $email = 'nafiz.pervez.work@gmail.com';
   
        $maildata = [
            'title' => 'Laravel 8 Mail Sending Example with Markdown',
            
        ];
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
            'id' => 'rand12344',
            'leave_type' => 'sick',
        ];
        $conveyanceuser =[
            'applicant' => 'Random Name',
            
            'contact_number' => '+8801792123455',
            'email' => 'nafiz.pervez.work@gmail.com',
            'designation' => 'developer',
            'department' => 'technologies',
            'division' => 'J',


        ];
        $conveyanceinfo =[
            'id'=>'Random4567890',
            'application_date' => '10/10/2021',
            'conveyance_type' => 'overtime',
            'in_time' => '09:00AM',
            'out_time' => '12:00PM',
            'from' => 'Uttara',
            'to' => 'Mohakhali',
            'payable_amount' => '3000BDT',

        ];

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
  
        Mail::to($email)->send(new SendDemoMail($leaveuser));
        Mail::to($email)->send(new SendDemoMail($leaveinfo));
        Mail::to($email)->send(new SendDemoMail($conveyanceuser));
        Mail::to($email)->send(new SendDemoMail($conveyanceinfo));
        Mail::to($email)->send(new SendDemoMail($pruser));
        
   
        dd("Mail has been sent successfully");
    }
}