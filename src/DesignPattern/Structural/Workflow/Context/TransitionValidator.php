<?php


namespace App\DesignPattern\Structural\Workflow\Context;

use App\DesignPattern\Structural\Workflow\States\Draft;
use App\DesignPattern\Structural\Workflow\States\Published;
use App\DesignPattern\Structural\Workflow\States\Review;
use App\DesignPattern\Structural\Workflow\States\StateInterface;

class TransitionValidator
{
    private array $validTransitions = [
        Draft::class => [Review::class],
        Review::class => [Published::class,Draft::class ],
        Published::class => [Review::class]
    ];


    public function isValidTransition(StateInterface $currentState,StateInterface $nextState):bool
    {
        $currentStateClass = $currentState::class;
        $nextStateClass = $nextState::class;

        return in_array($nextStateClass,$this->validTransitions[$currentStateClass],true) ;
    }


}