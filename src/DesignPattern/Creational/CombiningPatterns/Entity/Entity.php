<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Entity;

abstract class Entity implements EntityInterface
{
    public function getAttributes(): array
    {
        $attributes = [];
        $reflaction = new \ReflectionClass($this);
        foreach($reflaction->getProperties() as $property){
            $property->setAccessible(true);
            $attributes[$property->getName()] = $property->getValue($this);
        }
        return $attributes;
    }
}