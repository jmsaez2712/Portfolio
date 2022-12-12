<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller
{
    public function index(){
        return view('index',
            ['projects'=>Project::getProjects()]);
    }

    public function sendContactForm(Request $request){
        $name = $request->get('name');
        $email = $request->get('email');
        $subject = $request->get('subject');
        $message = $request->get('message');

        Mail::to('jose_manuel_saez@hotmail.es')->send(new ContactMail());

        //TODO: Add SMTP server to mail and test. Mailtrap at the beginning
        return view('contact');
    }
}
