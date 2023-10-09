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
        $mails = ['jmkolawole@gmail.com', 'mkojimoh@gmail.com', 'kolawole@aeeiee.com'];

        foreach ($mails as $mail) {
            dispatch(new SendEmailQueueJob($mail));
        }

        dd('yes');
    }
}
