<?php

namespace App\Http\Controllers;

use App\Classes\EmailVerifier;
use App\Classes\OtherVerifier;
use App\Classes\SmsVerifier;
use App\Classes\TelegramVerifier;
use App\Services\VerificationService;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function verify(Request $request)
    {
        $data = $request->all();

        $verifier = new TelegramVerifier($data['account']);

        // or
        // $verifier = new SmsVerifier($data['phone']);

        // or
        // $verifier = new EmailVerifier($data['email']);
        
        // or
        // $verifier = new OtherVerifier($data);

        (new VerificationService($verifier))->verify();
    }
}
