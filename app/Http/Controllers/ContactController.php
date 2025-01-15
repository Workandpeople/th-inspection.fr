<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        return view('contact');
    }

    public function send(Request $request)
    {
        $validated = $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'telephone' => 'required|string|max:15',
            'email' => 'required|email',
            'objet' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        // Mail pour l'administration
        Mail::send([], [], function ($message) use ($validated) {
            $message->to(env('MAIL_FROM_ADDRESS'))
                ->subject($validated['objet'])
                ->setBody("Message de {$validated['prenom']} {$validated['nom']}:\n\n{$validated['message']}\n\nTéléphone : {$validated['telephone']}", 'text/plain');
        });

        // Mail de confirmation pour le client
        Mail::send([], [], function ($message) use ($validated) {
            $message->to($validated['email'])
                ->subject("Confirmation de réception de votre message")
                ->setBody("Bonjour {$validated['prenom']},\n\nNous avons bien reçu votre message. Nous vous répondrons dans les plus brefs délais.\n\nCordialement,\nL'équipe.", 'text/plain');
        });

        return response()->json(['success' => true]);
    }
}
