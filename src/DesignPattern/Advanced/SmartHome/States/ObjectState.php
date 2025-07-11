<?php


namespace App\DesignPattern\Advanced\SmartHome\States;

class ObjectState
{
    private object $state;
    public function __construct(object $state)
    {
        $this->state = $state;
        
    }

    public function getState(): object
    {
        return $this->state;
    }
}