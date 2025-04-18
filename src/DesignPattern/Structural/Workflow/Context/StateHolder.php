<?php


namespace App\DesignPattern\Structural\Workflow\Context;

use App\DesignPattern\Structural\Workflow\States\StateInterface;

final class StateHolder
{
    private StateInterface $currentState;

    public function __construct(StateInterface $initialState)
    {
        $this->currentState = $initialState;        
    }

    public function getState() 
    {
        return $this->currentState;
        
    }

    public function setState(StateInterface $state)
    {
        $this->currentState = $state;
        
    }

    
}