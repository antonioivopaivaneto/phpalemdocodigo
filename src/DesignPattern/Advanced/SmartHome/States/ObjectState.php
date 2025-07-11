<?php


namespace DesignPattern\Advanced\SmartHome\States;

class ObjectState
{
    public function __construct(private string $state)
    {
        
    }

    public function getState(): string
    {
        return $this->state;
    }
}