<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function index() 
    {
        if (auth()->user()) 
        {
            return redirect()->intended('/');
        }
        else
        {
            return view('login');
        }
    }

    public function login(Request $request)
    {
        $data = $request->validate([
            'login' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['email' => $data['login'], 'password' => $data['password']])) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'login' => 'Login lub hasło nie sa poprawne.'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/')->with('success', 'Pomyślnie wylogowano');
    }
}