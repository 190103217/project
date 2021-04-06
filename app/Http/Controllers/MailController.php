<?php
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Mail\DemoEmail;
use Illuminate\Support\Facades\Mail;
 
class MailController extends Controller
{
    public function send()
    {
        $objDemo = new \stdClass();
        $objDemo->demo_one = 'Top up your home first aid kit with us.';
        $objDemo->demo_two = 'What is the general state at the moment?';
        $objDemo->sender = 'Diana';
        $objDemo->receiver = 'Diana';
 
        Mail::to("190103217@stu.sdu.edu.kz")->send(new DemoEmail($objDemo));
    }
}