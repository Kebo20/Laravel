<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\Demo;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        Mail::to('oracioalberca@gmail.com')->send(new Demo());
        //Mail::mailer('mailgun')->to('kevinalbercacubas@gmail.com')->send(new DemoEmail());
        return "Correo enviado";
        }
}