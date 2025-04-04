<?php

namespace App\DesignPattern\Creational\Prototype;

class ConcreteSculpture implements SculpturePrototype
{
    public string $material;

    public function __construct(string $material)
    {
        $this->material = $material;
        
    }

    public function clone(): SculpturePrototype
    {
        return clone $this;

    }
}

