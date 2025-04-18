<?php

namespace App\DesignPattern\Structural\Workflow\Facade;

use App\DesignPattern\Structural\Workflow\Context\WorkflowContext;
use App\DesignPattern\Structural\Workflow\Logger\LoggerInterface;
use App\DesignPattern\Structural\Workflow\Proxy\WorkflowProxy;
use App\DesignPattern\Structural\Workflow\Security\AuthenticatorInterface;
use App\DesignPattern\Structural\Workflow\States\StateInterface;
use App\DesignPattern\Structural\Workflow\Transitions\TransitionInterface;

class WorkflowFacade
{

    private WorkflowProxy $proxy;
    private LoggerInterface $logger;


    public function __construct(
        StateInterface $initialState,
        AuthenticatorInterface $authenticator,
        LoggerInterface $logger
    )
    {
        $context = new WorkflowContext($initialState);
        $this->proxy = new WorkflowProxy($context,$authenticator);
        $this->logger = $logger;
        
    }


    public function applyTransition(TransitionInterface $transition):void
    {
        $this->logger->log("Applying transition");
        $this->proxy->applyTransition($transition);
        $this->logger->log("transition applied successfully");        
    }

    public function getCurrentState():StateInterface
    {
        return $this->proxy->getCurrentState();
        
    }

}