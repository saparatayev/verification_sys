<?php

namespace App\Classes;

use App\Contracts\VerificationMethodInterface;

class OtherVerifier implements VerificationMethodInterface
{
    private $otherData;

    public function __construct($otherData) {
        $this->otherData = $otherData;
    }

    public function makeVerification()
    {
        // make verfication
        dd($this->otherData);
    }
}