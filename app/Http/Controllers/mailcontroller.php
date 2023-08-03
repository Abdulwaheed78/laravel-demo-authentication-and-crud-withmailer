<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Mail\demomail;

class mailcontroller extends Controller
{
    public function index()
    {
        $maildata = [
            'title' => 'Mail From Larademo',
            'body' => 'This Mail is For Testing Using smyp',
        ];
        Mail::to('awc361@gmail.com')->send(new demomail($maildata));
        dd('mail send successfully');
    }
}
