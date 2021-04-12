<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send()
    {
        $data = array('name'=>"Abytkhan Srazhiddin", "body" => "Test mail");
     
        Mail::send('mails.demo', $data, function($message){
            $message->to('srazhiddinabytkhan1@gmail.com', 'Abytkhan Srazhiddin')
                    ->subject('Artisans Web Testing Mail');
            $message->from('190103236@stu.sdu.edu.kz','Abytkhan Srazhiddin');
        });
    }
}