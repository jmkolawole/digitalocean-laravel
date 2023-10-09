<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailQueueJob;
use App\Mail\SendEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    //
    public function send()
    {
        $mails = ['kolawole@gmail.com', 'dapo@gmail.com', 'tobi@gmail.com'];

        foreach ($mails as $mail) {
            dispatch(new SendEmailQueueJob($mail));
        }



        dd('yes');
    }
}
