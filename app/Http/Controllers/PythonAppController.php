<?php

namespace App\Http\Controllers;

use App\Models\PythonApp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use function Pest\Laravel\get;

class PythonAppController extends Controller
{
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

        // check if the public IP is available in the database if available then add mintute the expire time and send true or false
        $pythonApp = PythonApp::where('public_ip', $publicIp)->first();
        if ($pythonApp) {
            $pythonApp->expire_time = now()->addMinute();
            $pythonApp->save();
            return response()->json(['status' => 'Python script is running.', 'block_processes' => true]);
        }
        return response()->json(['status' => 'Python script is not running.', 'block_processes' => false]);
    }

    public  function getPublicIP()
    {
        $response = Http::get('https://api.ipify.org');
        return $response->body();
    }

    public function checkIp(Request $request)
    {
        $publicIp = $request->input('public_ip') ?? $this->getPublicIP();

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
