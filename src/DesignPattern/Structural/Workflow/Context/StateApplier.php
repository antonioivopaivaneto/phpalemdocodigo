<?php


namespace App\DesignPattern\Structural\Workflow\Context;

use App\DesignPattern\Structural\Workflow\Transitions\TransitionInterface;

class StateApplier
{
    public function applyTransition(StateHolder $stateHolder,TransitionValidator $validator,TransitionInterface $transition):void
    {
        $nextState = $transition->execute();

        if(!$validator->isValidTransition($stateHolder->getState(),$nextState)){
            throw new \Exception('invalid transition');
        }

       $stateHolder->getState($nextState);
       $nextState->handle();

    }
}