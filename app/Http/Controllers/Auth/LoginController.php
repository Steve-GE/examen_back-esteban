<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('/empleados');
        }

        return redirect()->route('login')->with('error', 'Email y/o Contraseña Incorrectos');
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
