<?php

namespace App\DesignPattern\Structural\Workflow\States;


class Draft implements StateInterface
{

    public function handle():void
    {
        echo "Manipulando para estado de rascunho.\n";
        
    }
    
}