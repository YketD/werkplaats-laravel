<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function sendOrder(Request $request)
    {


        return response()->json($request->all());
    }
}
