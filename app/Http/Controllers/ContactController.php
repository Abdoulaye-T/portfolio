<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function sendContactForm(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        Mail::send([], [], function ($message) use ($data) {
            $escapedName = htmlspecialchars($data['name'], ENT_QUOTES, 'UTF-8');
            $escapedEmail = htmlspecialchars($data['email'], ENT_QUOTES, 'UTF-8');
            $escapedMessage = htmlspecialchars($data['message'], ENT_QUOTES, 'UTF-8');
        
            $message->to('at904141@gmail.com')
                    ->subject('Nouveau message de contact')
                    ->from($data['email'], $data['name'])
                    ->html("<h1>Nom : {$escapedName}</h1><p>Email : {$escapedEmail}</p><p>Message : {$escapedMessage}</p>");
        });        

        return back()->with('success', 'Merci de nous avoir contactés.');
    }
}
