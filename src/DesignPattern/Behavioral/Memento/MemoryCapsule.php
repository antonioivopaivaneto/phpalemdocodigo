<?php

namespace App\DesignPattern\Behavioral\Memento;

use SplStack;

class MemoryCapsule
{
    public function __construct(private string $state)
    { }


    public function getState():string
    {
        return $this->state;
        
    }
}