<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
class BotController extends Controller
{
    //
    public function makeMessage(Request $request){
        
        
        $response = json_decode($request->getContent());
        $accountSid = env('TWILIO_ACCOUNT_SID');
        
        $authToken = env('TWILIO_AUTH_TOKEN');
        
        $twilioNumber = env('TWILIO_NUMBER');
        
        $client = new Client($accountSid, $authToken);
        
        $to = "+ENTER YOUR VERIFIED NUMBER HERE";
        
        
        
        $client->messages->create(
        
        $to,
        
        [
        
        "body" => $response->text,
        
        "from" => $twilioNumber
        
        //   On US phone numbers, you could send an image as well!
        
        //  'mediaUrl' => $imageUrl
        
        ]
        
        );
        
    }
}