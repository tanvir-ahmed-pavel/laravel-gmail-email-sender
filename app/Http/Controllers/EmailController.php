<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleMail;

class EmailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'recipient' => 'required|email',
            'name' => 'required|string',
        ]);

        Mail::to($data['recipient'])->send(new SampleMail($data));

        return response()->json(['message' => 'Email sent successfully!']);
    }
}
