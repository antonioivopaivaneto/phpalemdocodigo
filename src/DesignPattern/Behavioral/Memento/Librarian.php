<?php

namespace App\DesignPattern\Behavioral\Memento;

use SplStack;
class Librarian
{
    private SplStack $savedMemoryCapsules;

    public function __construct()
    {
        $this->savedMemoryCapsules = new SplStack();
    }

    public function addMemoryCapsule(MemoryCapsule $memoryCapsule):void 
    {
        $this->savedMemoryCapsules->push($memoryCapsule);        
    }
    public function getMemoryCapsule():?MemoryCapsule
    {
        return $this->savedMemoryCapsules->isEmpty() ? null :  $this->savedMemoryCapsules->pop();
        
    }

}