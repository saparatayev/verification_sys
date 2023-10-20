<?php

namespace App\Services;

use App\Contracts\VerificationMethodInterface;

class VerificationService
{
    private $verificationMethod;

    public function __construct(VerificationMethodInterface $verificationMethod) {
        $this->verificationMethod = $verificationMethod;
    }

    public function verify()
    {
        $this->verificationMethod->makeVerification();
    }
}