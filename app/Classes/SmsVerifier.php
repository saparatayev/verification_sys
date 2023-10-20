<?php

namespace App\Classes;

use App\Contracts\VerificationMethodInterface;

class SmsVerifier implements VerificationMethodInterface
{
    private $phone;

    public function __construct($phone) {
        $this->phone = $phone;
    }

    public function makeVerification()
    {
        // make verfication
        dd($this->phone);
    }
}