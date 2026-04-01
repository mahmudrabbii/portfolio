<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class QueryController extends Controller
{
    public function mailSend(Request $request)
    { Log::info('Received query form submission', ['request' => $request->all()]);
        // Validate form data
       $data = $request->validate([
            'email' => 'required|email',
            'contact' => 'required',
            'description' => 'required'
        ]);
/*
        // Send email as plain text
        Mail::raw(
            "Email: " . $request->email .
            "\nContact: " . $request->contact .
            "\n\nDescription:\n" . $request->description,

            function ($message) {
                $message->to('mahmud.rabbi0510@gmail.com')
                        ->subject('New Query From Website');
            }
          */
            // Send email using a blade template
            mail::send('emailTemplate.query', $data, function($message) {
                $message->to('mahmud.rabbi0510@gmail.com') // Replace with your email
                        ->subject('New Query From Website');
            });

        

        // Redirect back
        return back()->with('success', 'Query sent successfully!');
    }
}