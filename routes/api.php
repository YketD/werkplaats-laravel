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

Route::middleware('throttle:500')->post('/send-order', 'OrderController@sendOrder');
Route::middleware('throttle:500')->post('/send-message', 'ContactController@sendMessage');
Route::middleware('throttle:500')->post('/send-hire-request', 'OrderController@sendHireRequest');
Route::middleware('throttle:500')->post('/send-activity-admission', 'OrderController@activityAdmission');
Route::middleware('throttle:500')->get('/show', 'OrderController@show');
//    , function (EmailRequest $request) {
//    $sender = 'info@werkplaats75c.nl';
//    $recipient = 'info@werkplaats75c.nl';
//
//    $subject = "php mail test";
//    $msg = $request->input('message') ."\n" .
//        ' naam: ' . $request->input('name') . "\n" .
//        ' telefoon nummer: ' . $request->input('phone'). "\n" .
//        ' email adres: ' . $request->input('phone');
//    $headers = "From:" . $request->input('mail');
//    if (mail($recipient, $subject, $msg, $headers))
//    {
//        echo "Message accepted";
//    }
//    else
//    {
//        echo "Error: Message not accepted";
//    }

