<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Role;
use App\Http\Requests\Auth\LoginRequest;

class AuthController extends Controller
{
    public function index()
    {
        return view('user.pages.login');
    }

    public function login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => Role::ADMIN], $request->get('remember_me') == 'on')) {
            $request->session()->regenerate();

            return redirect()->intended('admin');
        } else if (Auth::attempt(['email' => $email, 'password' => $password, 'role_id' => Role::NORMAL], $request->get('remember_me') == 'on')) {
            $request->session()->regenerate();

            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => __('invalid email'),
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
