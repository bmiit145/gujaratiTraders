<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use Craftsys\Msg91\Facade\Msg91;

use Illuminate\Support\Facades\Http;

use Carbon\Carbon;



class SMSController extends Controller

{

    public function sendOTPSMS($otp, $phone)  

    {

        $user = 'GUJRATITRADER';

        $pass = '123456';

        $sender = 'GUJRTR';

        $text = "Your verification OTP code for Gujrati Trader is {$otp}, Valid for the next 5 min. Do not share with anyone - Gujrati Trader";

        $priority = 'ndnd';

        $stype = 'normal';



        $response = Http::get('http://sms.unistepindia.in/api/sendmsg.php', [

            'user' => $user,

            'pass' => $pass,

            'sender' => $sender,

            'phone' => $phone, 

            'text' => $text,

            'priority' => $priority,

            'stype' => $stype,

        ]);



        if ($response->successful()) {

            $success = true;

            $message = 'OTP SMS sent successfully';

        } else {

            $success = false;

            $message = 'Failed to send OTP';

        }



        return ['success' => $success, 'message' => $message];

    }



}

