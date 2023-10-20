<?php

namespace App\Classes;

use App\Contracts\VerificationMethodInterface;

class EmailVerifier implements VerificationMethodInterface
{
    private $email;

    public function __construct($email) {
        $this->email = $email;
    }

    public function makeVerification()
    {
        // make verfication
        dd($this->email);
    }
}