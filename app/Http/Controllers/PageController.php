<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function aboutus()
    {
        return view('pages.aboutus');
    }

    public function countrylist()
    {
        return view('pages.country-list');
    }

    public function caselist()
    {
        return view('pages.case-list');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function teamdetails()
    {
        return view('pages.team-details');
    }

    public function pricetable()
    {
        return view('pages.price-table');
    }

    public function careers()
    {
        return view('pages.careers');
    }

    public function appointments()
    {
        return view('pages.appointments');
    }

    public function timeline()
    {
        return view('pages.timeline');
    }

    public function workprocess()
    {
        return view('pages.work-process');
    }

    public function partners()
    {
        return view('pages.partners');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function comingsoon()
    {
        return view('pages.coming-soon');
    }

    public function fourzerofour()
    {
        return view('pages.404');
    }

    public function login()
    {
        return view('pages.login');
    }

    public function visalist()
    {
        return view('pages.visa-list');
    }

    public function touristvisa()
    {
        return view('pages.tourist-visa');
    }

    public function services()
    {
        return view('services.services');
    }

    public function servicedetails()
    {
        return view('services.service-details');
    }

    public function service_tourist_visa()
    {
        return view('services.service_tourist_visa');
    }

    public function service_family_visa()
    {
        return view('services.service_family_visa');
    }

    public function service_student_visa()
    {
        return view('services.service_student_visa');
    }

    public function service_work_permit()
    {
        return view('services.service_work_permit');
    }

    public function service_business_visa()
    {
        return view('services.service_business_visa');
    }

    public function service_immigration()
    {
        return view('services.service_immigration');
    }

    public function service_express_entry()
    {
        return view('services.service_express_entry');
    }

    public function service_pnp_program()
    {
        return view('services.service_pnp_program');
    }

    public function service_quebec_program()
    {
        return view('services.service_quebec_program');
    }


    public function service_startup_visa()
    {
        return view('services.service_startup_visa');
    }

    public function private_policy()
    {
        return view('pages.private_policy');
    }

    public function send_email(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->only(['message_name', 'message_email', 'message_contactno', 'message_subject', 'message']);
            $email_subject = "Quest Application message from {$data['message_name']} having subject {$data['message_subject']}";
            $email_body = "Name: {$data['message_name']}\nEmail: {$data['message_email']}\nContact Number: {$data['message_contactno']}\nMessage: {$data['message']}";

            $recipient_email = 'mrashid2000@gmail.com';
            $bcc_email = 'mrashid2000@yahoo.com';

            \Mail::raw($email_body, function($message) use ($data, $email_subject, $recipient_email, $bcc_email) {
                $message->from($data['message_email']);
                $message->to($recipient_email);
                $message->bcc($bcc_email);
                $message->subject($email_subject);
            });

            \Session::flash('info', 'Thank you! We will get back to you as soon as possible.');
            return redirect()->route('pages.index');
        }

        return view('pages.index');
    }
}

