<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Mail\MessageReceived;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function sendEmail(Request $request)
    {
        // Handle form submission
        $formSource = $request->input('form_source');
       
        $validatedData = $request->validate([
            'message_name' => 'required|string|max:255',
            'message_contactno' => 'nullable|numeric',
            'message_email' => 'required|email|max:255',
            'message_subject' => 'nullable|string|max:255',
            'message' => 'nullable|string',
        ]);

        // Save the message to the database
        $message = Message::create([
            'name' => $validatedData['message_name'],
            'contactno' => $validatedData['message_contactno'],
            'email' => $validatedData['message_email'],
            'subject' => $validatedData['message_subject'],
            'message' => $validatedData['message'],
        ]);

        // Send the email
        Mail::to('info@qimmigration.ca')->send(new MessageReceived($message));

        // Redirect based on the form source
        if ($formSource === 'faq') {
            return redirect()->route('faq')->with('success', 'Your message has been sent successfully!');
        } else {
            return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');
        }
    }
}

