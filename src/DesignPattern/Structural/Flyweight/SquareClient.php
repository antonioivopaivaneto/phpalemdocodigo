<?php

namespace App\DesignPattern\Structural\Flyweight;

class SquareClient 
{
    public function __construct(private SquareFactory $factory) {
        
    }
    public function drawSquares(): void
    {

        $positions = ["1,1","2,2","3,3"];

        foreach($positions as $position)
        {
            $square = $this->factory->getSquare("red");
            echo $square->render($position)."\n";
            
            $unshared = new UnsharedSquare("unique");
            echo $unshared->render($position). "\n";

        }

    }
}