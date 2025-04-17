<?php

namespace App\DesignPattern\Structural\Flyweight;

interface ArtisticDrawing{
    public function render(string $extrinsicState):string;
}