<?php

use App\Http\Requests\EmailRequest;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('throttle:500')->post('/send-mail', function (EmailRequest $request) {
    $sender = 'info@werkplaats75c.nl';
    $recipient = 'info@werkplaats75c.nl';

    $subject = "php mail test";
    $message = "php test message";
    $headers = 'From:' . $sender;

    if (mail($recipient, $subject, $message, $headers))
    {
        echo "Message accepted";
    }
    else
    {
        echo "Error: Message not accepted";
    }


    $msg = $request->input('message') ."\n" .
    ' naam: ' . $request->input('name') . "\n" .
    ' telefoon nummer: ' . $request->input('phone'). "\n" .
    ' email adres: ' . $request->input('phone');
    $headers = "From:" . $request->input('mail');
    if (mail("yketd@hotmail.com", "Onderwerp", $msg, $headers));
    return $msg;
});