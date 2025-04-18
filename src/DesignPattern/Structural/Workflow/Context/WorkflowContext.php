<?php

namespace App\DesignPattern\Structural\Workflow\Context;

use App\DesignPattern\Structural\Workflow\States\Draft;
use App\DesignPattern\Structural\Workflow\States\Published;
use App\DesignPattern\Structural\Workflow\States\Review;
use App\DesignPattern\Structural\Workflow\States\StateInterface;
use App\DesignPattern\Structural\Workflow\Transitions\TransitionInterface;

class WorkflowContext implements WorkflowContextInterface
{

    public function __construct(private StateInterface $currentState){}

    private array $validTransitions = [
        Draft::class => [Review::class],
        Review::class => [Published::class,Draft::class ],
        Published::class => [Review::class]
    ];

    private function isValidTransition(StateInterface $nextState):bool
    {
        $currentStateClass = $this->currentState::class;
        $nextStateClass = $nextState::class;

        return in_array($nextStateClass,$this->validTransitions[$currentStateClass],true) ;
    }


    public function applyTransition(TransitionInterface $transition):void
    {
        $nextState = $transition->execute();

        if(!$this->isValidTransition($nextState)){
            throw new \Exception('invalid transition');
        }

        $this->currentState = $nextState;
        $this->currentState->handle();

    }
    public function getState():StateInterface
    {
        return $this->currentState;

    }
    
}