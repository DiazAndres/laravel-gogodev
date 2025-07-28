<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MailController extends Controller
{
    public function index()
    {
        return view('mail.index');
    }

    public function sendMail()
    {
        // Logic to send mail
        return 'Mail sent successfully!';
    }
}
