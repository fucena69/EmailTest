<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;

class Email extends Controller
{
    public function sendWelcomeEmail()
{
    $user = auth()->user(); // Replace with your user retrieval logic

    try {
     
        Mail::to("cristoffer.massive@gmail.com")->send(new WelcomeEmail());

        return response()->json([
            'status' => true,
            'message' => 'Welcome email sent successfully!',
        ], 200);

    } catch (\Throwable $th) {
        return response()->json([
            'status' => false,
            'message' => 'Error retrieving plans',
            'errors' => $th->getMessage()
        ], 500);
    }
}





}





