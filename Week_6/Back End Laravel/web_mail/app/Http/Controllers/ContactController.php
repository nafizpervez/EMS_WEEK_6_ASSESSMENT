<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\PrCreationNotification;

class ContactController extends Controller
{
    public function send (Request $request){

        $request -> validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);

        return (new PrCreationNotification);

        if($this->isOnline()){
            
            //person01
            $mail_data = [
                'recipient'=> 'nafiz.pervez@northsouth.edu',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];
            

            //person02
            $mail_data = [
                'recipient'=> 'nafiz.pervez.work@gmail.com',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];
            
            //person03
            $mail_data = [
                'recipient'=> '#',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];

            $mail_data = [
                'recipient'=> '#',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];

            $mail_data = [
                'recipient'=> '#',
                'fromEmail'=> $request->email,
                'fromName'=> $request->name,
                'subject'=>$request->subject,
                'body'=>$request->message
            ];

            \Mail::send('email-template',$mail_data,function($message) use ($mail_data){
                $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'], $mail_data['fromName'])
                        ->subject($mail_data['subject']);
            });
            return redirect()->back()->with('success', 'Email Sent!');

        }else {
            return redirect()->back()->withInput()->with('error', 'Check Your Internet Connection');
        }
    }

    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site, "r")){
            return true;
        }
        else {
            return false;
        }
    }
}
