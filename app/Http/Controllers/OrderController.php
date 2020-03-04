<?php

namespace App\Http\Controllers;

use App\Entities\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

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

        return response()->json($request->all());
    }
}
