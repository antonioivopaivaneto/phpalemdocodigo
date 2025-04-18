<?php

namespace App\DesignPattern\Structural\Workflow\States;


class Review implements StateInterface
{

    public function handle():void
    {
        echo "Manipulando para estado de revisao.\n";
        
    }
    
}