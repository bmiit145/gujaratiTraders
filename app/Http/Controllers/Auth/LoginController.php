<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function login(Request $request)
    {
        $input = $request->all();
        $this->validate($request, [
            'email' => 'required|email', 
            'password' => 'required' 
        ], [
            'email.required' => 'The email field is required.', 
            'email.email' => 'Please enter a valid email address for the student email.', 
            'password.required' => 'The password field is required.' 
        ]);
    
        if (auth()->attempt(['email' => $input['email'], 'password' => $input['password']])) {
            $user = auth()->user();
    
            if ($user->is_lock == 1) {
                if ($user->is_role == 1) {
                    if ($user->is_delete == 1) {
                        return redirect()->route('admin.dashboard');
                    } else {
                        return redirect()->route('login')->with('error', 'Your account is deactivated.');
                    }
                } elseif ($user->is_role == 2) {
                    if ($user->is_delete == 1) {
                        return redirect()->route('student.dashboard');
                    } else {
                        return redirect()->route('login')->with('error', 'Your account is deactivated.');
                    }
                }
            } else {
                return redirect()->route('login')->with('error', 'Your account is locked.');
            }
        } else {
            return redirect()->route('login')->with('error', 'Please enter correct login credentials');
        }
    }

}
