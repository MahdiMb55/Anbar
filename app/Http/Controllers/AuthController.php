<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request) {
        $credentials = $request->validate([
            'username' => "required|string|min:3",
            'password' => "required|string"
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('dashboard');
        }
 
        return back()->withErrors([
            'username' => 'حساب کاربری با این مشخصات یافت نشد !',
        ]);
        
    }
}
