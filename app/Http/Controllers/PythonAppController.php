<?php

namespace App\Http\Controllers;

use App\Models\PythonApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function Pest\Laravel\get;

class PythonAppController extends Controller
{

    public function notAllowPage(Request $request){
        // page return
        return view('not-allow');
    }
    public function updateIp(Request $request)
    {
        //create validation to ensure that the public_ip is provided if failed return proper error message
        $validated = validator($request->all(), [
            'public_ip' => 'required'
        ]);

        if ($validated->fails()) {
            return response()->json(['error' => $validated->errors()->first() , 'status' => 'Python script is not running.', 'blocked' => false]);
        }

        $publicIp = $request->input('public_ip');

        // \Log::info('Public IP: ' . $publicIp);

        // check if the public IP is available in the database if available then add mintute the expire time and send true or false
        $pythonApp = PythonApp::where('public_ip', $publicIp)->first();
        if ($pythonApp) {
            $pythonApp->expire_time = now()->addMinute();
            $pythonApp->save();
            return response()->json(['status' => 'Python script is running.', 'block_processes' => true]);
        }
        return response()->json(['status' => 'Python script is not running.', 'block_processes' => false]);
    }

    protected function getPublicIP(Request $request)
    {
        // Check for common proxy headers
        if ($request->hasHeader('X-Forwarded-For')) {
            $ip = $request->header('X-Forwarded-For');
            // If there are multiple IPs in the header, take the first one (client IP)
            return trim(explode(',', $ip)[0]);
        }

        if ($request->hasHeader('Client-IP')) {
            return $request->header('Client-IP');
        }

        if ($request->hasHeader('X-Real-IP')) {
            return $request->header('X-Real-IP');
        }

        // Fallback to the Laravel default method for retrieving IP
        return $request->ip();
    }


    public function checkIp(Request $request)
    {
        $publicIp = $request->input('public_ip') ?? $this->getPublicIP($request);

        // check if the public IP is available in the database if available then add mintute the expire time and send true or false
        $pythonApp = PythonApp::where('public_ip', $publicIp)->first();
        if ($pythonApp) {
            if ($pythonApp->expire_time > now()) {
                return response()->json(['status' => 'Python script is running.', 'allowed' => true]);
            }
            return response()->json(['status' => 'Python script is not running.', 'allowed' => false]);
        }
        else
        {
            $pythonApp = new PythonApp();
            $pythonApp->public_ip = $publicIp;
            $pythonApp->expire_time = now();
            $pythonApp->save();
            return response()->json(['status' => 'Python script is running.', 'allowed' => false]);
        }
    }

}
