<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\VerificationEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailController extends Controller
{
    public function notice()
    {
        return back()->with('error', __('app.require_verification'));
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect()->route('home')->with('success', __('app.success_verification'));
    }

    public function sendVerification(Request $request)
    {
        dispatch(new VerificationEmail($request->user()));

        return back()->with('success', __('app.success_send_verification'));
    }
}
