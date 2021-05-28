<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail($data)
    {
        Mail::to(env("MAIL_USERNAME"))->send(new OrderMail($data));
        $result = (count(Mail::failures()) > 0) ? false : 'ok';

        return response()->json([
            'message' => $result
        ]);
    }
}