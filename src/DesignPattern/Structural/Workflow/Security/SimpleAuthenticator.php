<?php

namespace App\DesignPattern\Structural\Workflow\Security;

class SimpleAuthenticator implements AuthenticatorInterface
{
    public function authenticate(bool $authenticated):bool
    {
        return $authenticated;
    }
}