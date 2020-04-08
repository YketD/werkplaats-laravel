<?php

namespace App\Http\Controllers;

use App\Entities\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function sendOrder(Request $request)
    {
        $reservation = new Reservation();

        $reservation->email = Arr::get($request, 'email', 'Not provided');
        $reservation->phone = Arr::get($request, 'phone', 'Not provided');
        $reservation->fullname = Arr::get($request, 'fullName', 'Not provided');
        $reservation->plan = Arr::get($request, 'plan', 'Not provided') . " voor " . Arr::get($request, 'time', 'Not provided');
        $reservation->save();

        Mail::send('mail.succesfullreservation', ['fullname' => $reservation->fullname], function($message) use ($reservation) {
            $message->to($reservation->email)->subject('Bedankt voor uw reservering!')->from('info@werkplaats75c.nl');
        });

        Mail::send('mail.aanmeldingmessage', ['reservation' => $reservation], function($message) {
            $message->to('info@werkplaats75c@.nl')->subject('Nieuwe reservering!')->from('info@werkplaats75c.nl');
        });

        view('mail.succesfullreservation');
        return response()->json($request->all());
    }

    public function sendHireRequest(Request $request)
    {
        $reservation = new Reservation();

        $reservation->email = Arr::get($request, 'email', 'Not provided');
        $reservation->phone = Arr::get($request, 'phone', 'Not provided');
        $reservation->fullname = Arr::get($request, 'fullName', 'Not provided');
        $reservation->plan = Arr::get($request, 'plan', 'Not provided') . " voor " . Arr::get($request, 'time', 'Not provided');
        $reservation->save();

        Mail::send('mail.succesfullhire', ['fullname' => $reservation->fullname], function($message) use ($reservation) {
            $message->to($reservation->email)->subject('Bedankt voor uw huuraanvraag!')->from('info@werkplaats75c.nl');
        });

        Mail::send('mail.aanmeldingmessage', ['reservation' => $reservation], function($message) {
            $message->to('info@werkplaats75c.nl')->subject('Nieuwe huuraanvraag!')->from('info@werkplaats75c.nl');
        });

        view('mail.succesfullreservation');
        return response()->json($request->all());
    }

    public function show(Request $request) {
        return view('mail.succesfullreservation');
    }

}
