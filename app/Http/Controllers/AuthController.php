<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validateData = $request->validate([
            'email' => 'email:rfc|required',
            'password' => 'required'
        ]);
        $email = $request->get('email');
        $password = $request->get('password');
        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 3], $request->get('remember_me') == 'on')) {
            $request->session()->regenerate();
            return redirect()->intended('admin');
        } else if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => 2], $request->get('remember_me') == 'on')) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
