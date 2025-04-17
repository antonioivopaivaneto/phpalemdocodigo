<?php

namespace App\DesignPattern\Structural\Flyweight;

class UnsharedSquare implements ArtisticDrawing
{
    public function __construct(private string $uniqueAttribute) {
        
    }
    public function render(string $extrinsicState): string
    {

        return "Rendered an unshared square at position {$extrinsicState}, unique attribute: {$this->uniqueAttribute}";
    }
}