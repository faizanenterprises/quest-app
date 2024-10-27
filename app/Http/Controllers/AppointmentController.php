<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;


class AppointmentController extends Controller
{
    public function make_appointment(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['gender', 'service', 'name', 'phone', 'date', 'time']);

            $appointment = new Appointment();
            $appointment->gender = $data['gender'];
            $appointment->service = $data['service'];
            $appointment->name = $data['name'];
            $appointment->phone = $data['phone'];
            $appointment->date = $data['date'];
            $appointment->time = $data['time'];
            $appointment->save();

            $email_subject = "Quest Application Appointment from {$data['name']}";
            $email_body = "Name: {$data['name']}\nGender: {$data['gender']}\nContact Number: {$data['phone']}\nService: {$data['service']}\nDate: {$data['date']}\nTime: {$data['time']}";

            $recipient_email = 'info@qimmigration.ca';
            $bcc_email = 'mrashid2000@yahoo.com';

            Mail::raw($email_body, function($message) use ($data, $email_subject, $recipient_email, $bcc_email) {
                $message->from($recipient_email);
                $message->to($recipient_email);
                $message->bcc($bcc_email);
                $message->subject($email_subject);
            });

            Session::flash('sentmessage', 'Thank you! We will get back to you as soon as possible.');
            return redirect()->route('index');

        }

        return view('index');
    }
}

