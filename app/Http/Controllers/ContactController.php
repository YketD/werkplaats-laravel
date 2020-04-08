<?php

namespace App\Http\Controllers;

use App\Entities\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendMessage(Request $request)
    {
        $email = Arr::get($request, 'mail', 'Not provided');
        $phone = Arr::get($request, 'phone', 'Not provided');
        $fullname = Arr::get($request, 'name', 'Not provided');
        $bericht = Arr::get($request, 'message', 'Not provided');

        Mail::send('mail.contactmessage', ['fullname' => $fullname, 'phone' => $phone, 'email' => $email, 'bericht' => $bericht], function($message) {
            $message->to('info@werkplaats75c.nl')->subject('Nieuw bericht!')->from('info@werkplaats75c.nl');
        });

        view('mail.succesfullreservation');
        return response()->json($request->all());
    }
}
