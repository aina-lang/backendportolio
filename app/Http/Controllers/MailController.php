<?php

// use app/Http/Controllers/Controller.php;
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Mail\sendMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);

        // Envoyez l'e-mail à votre adresse e-mail
        Mail::to('merciaaina@gmail.com')->send(new SendMail($data));
        // Réponse à l'utilisateur (vous pouvez personnaliser le message de succès)
        return response()->json(['message' => 'Message sent successfully!'], 200);
    }

    public function index()
    {
        return  response()->json(['message' => 'Message sent successfully!'], 200);
    }
}
