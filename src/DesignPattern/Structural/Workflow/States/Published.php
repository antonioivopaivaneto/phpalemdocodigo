<?php

namespace App\DesignPattern\Structural\Workflow\States;


class Published implements StateInterface
{

    public function handle():void
    {
        echo "Manipulando para estado de publicado.\n";
        
    }
    
}