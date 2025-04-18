<?php

namespace App\DesignPattern\Structural\Workflow\Context;

use App\DesignPattern\Structural\Workflow\States\StateInterface;
use App\DesignPattern\Structural\Workflow\Transitions\TransitionInterface;

interface WorkflowContextInterface
{

    public function applyTransition(TransitionInterface $transition):void;
    public function getState():StateInterface;
    
}