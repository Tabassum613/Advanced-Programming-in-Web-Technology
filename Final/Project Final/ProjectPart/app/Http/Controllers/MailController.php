<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TestMail;
class MailController extends Controller
{
    public function sendEmail(){
        $details = [
            'title' => 'ADVANCED PROGRAMMING IN WEB TECHNOLOGY PROJECT',
            'body' => '.....THIS IS TEST MAIL.....'
        ];

        Mail::to("tabassumnuzhat26@gmail.com")->send(new TestMail($details));
        return "Email Send";
    }
}
