<?php

namespace App\DesignPattern\Structural\Flyweight;

class Square implements ArtisticDrawing
{
    public function __construct(private string $cor) {
        
    }
    public function render(string $extrinsicState): string
    {

        return "Rendered a {$this->cor} square at position {$extrinsicState}";
    }
}