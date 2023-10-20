<?php

namespace App\Classes;

use App\Contracts\VerificationMethodInterface;

class TelegramVerifier implements VerificationMethodInterface
{
    private $account;

    public function __construct($account) {
        $this->account = $account;
    }

    public function makeVerification()
    {
        // make verfication
        dd($this->account);
    }
}