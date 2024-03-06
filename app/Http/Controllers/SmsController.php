<?php

namespace App\Http\Controllers;

use Vonage\Client;
use Illuminate\Http\Request;
use Vonage\Client\Credentials\Basic;

class SmsController extends Controller
{
    public function send()
    {
        $basic  = new Basic("59d2c12a", "KKdWWWHxVzph9Xqc");
        $client = new Client($basic);

        $message = $client->sms()->send(
            new \Vonage\SMS\Message\SMS('+201025527636','Salah','Hiiiiiiii From Salah'));

        return response()->json('SMS has been sent',200);
    }
}
