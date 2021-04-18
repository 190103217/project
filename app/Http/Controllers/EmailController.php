<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Appointment;

class EmailController extends Controller
{
    public function create()
    {
        return view('email');
    }

    public function sendEmail(Request $request)
    {
        $request->validate([
          'name' => 'required',
          'surname' => 'required',
          'email' => 'required|email',
          'reason' => 'required',
          'doctor' => 'required',
          'date' => 'required',
          'content' => 'required',
        ]);
        Appointment::create($request->all());

        $data = [
          'reason' => $request->reason,
          'surname' => $request->surname,
          'name' => $request->name,
          'doctor' => $request->doctor,
          'date' => $request->date,
          'email' => $request->email,
          'content' => $request->content
        ];

        Mail::send('email-template', $data, function($message) use ($data) {
          $message->to($data['email'])
          ->subject('Appointment');
        });

        return back()->with(['message' => 'Email successfully sent!']);
    }
    

}
