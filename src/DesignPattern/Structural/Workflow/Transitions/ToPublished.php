<?php

namespace App\DesignPattern\Structural\Workflow\Transitions;

use App\DesignPattern\Structural\Workflow\States\Published;
use App\DesignPattern\Structural\Workflow\States\Review;
use App\DesignPattern\Structural\Workflow\States\StateInterface;

class ToPublished implements TransitionInterface
{

    public function execute():StateInterface
    {
        echo "Transicao para o estado de Em publicado.\n";
        return new Published();
    }
    
}