<?php

namespace App\DesignPattern\Structural\Workflow\Security;

interface AuthenticatorInterface
{
    public function authenticate(bool $authenticated):bool;
}