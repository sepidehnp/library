<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeMail;


class MailController extends Controller
{
    function sendEmail()
   {
    $to="sepidehnp.67@gmail.com";
    $msg="dummy text by code";
    $subject="code step by step";
    Mail::to($to)->send(new WelcomeMail($msg,$subject));
    return "Send Email";
   }
}
