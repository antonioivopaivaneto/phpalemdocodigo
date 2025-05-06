<?php

namespace App\DesignPattern\Behavioral\State;

class Chamaleon
{
    public function __construct(private ChamaleaonState $state)
    {
        
    }

    public function getState():ChamaleaonState
    {
        return $this->state;
    }
    public function setState(ChamaleaonState $state):void
    {
        $this->state = $state;
        
    }

    public function changeState():void
    {
        $this->state->changeColor($this);
        
    }
}