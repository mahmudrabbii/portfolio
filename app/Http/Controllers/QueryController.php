<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;

class QueryController extends Controller
{
    public function mailSend(Request $request)
    { Log::info('Received query form submission', ['request' => $request->all()]);exit;
        // Validate form data
        $request->validate([
            'email' => 'required|email',
            'contact' => 'required',
            'description' => 'required'
        ]);

        // Send email
        Mail::raw(
            "Email: " . $request->email .
            "\nContact: " . $request->contact .
            "\n\nDescription:\n" . $request->description,

            function ($message) {
                $message->to('mahmud.rabbi0510@gmail.com')
                        ->subject('New Query From Website');
            }
        );

        // Redirect back with success message
        return back()->with('success', 'Query sent successfully!');
    }
}