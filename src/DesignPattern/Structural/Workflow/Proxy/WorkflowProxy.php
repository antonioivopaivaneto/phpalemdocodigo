<?php

namespace App\DesignPattern\Structural\Workflow\Proxy;

use App\DesignPattern\Structural\Workflow\Context\WorkflowContextInterface;
use App\DesignPattern\Structural\Workflow\Security\AuthenticatorInterface;
use App\DesignPattern\Structural\Workflow\States\StateInterface;
use App\DesignPattern\Structural\Workflow\Transitions\TransitionInterface;
class WorkflowProxy
{
    public function __construct(
        private WorkflowContextInterface $context,
        private AuthenticatorInterface $authenticator
    ){}

    public function applyTransition(TransitionInterface $transition)
    {
        if(!$this->authenticator->authenticate(true)){
            throw new \Exception;
        }

        $this->context->applyTransition($transition);
    }
    public function getCurrentState():StateInterface
    {
        return $this->context->getState();
        
    }
}