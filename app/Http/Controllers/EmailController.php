<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\VeriftionEmail;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

class EmailController extends Controller
{
    public function notice()
    {
        return redirect('/')->with('error', __('app.require_verification'));
    }

    public function verify(EmailVerificationRequest $request)
    {
        $request->fulfill();

        return redirect('/')->with('success', __('app.success_verification'));
    }

    public function sendVerification(Request $request)
    {
        dispatch(new VeriftionEmail($request->user()));

        return back()->with('success', __('app.success_send_verification'));
    }
}
