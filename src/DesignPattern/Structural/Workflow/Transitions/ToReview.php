<?php

namespace App\DesignPattern\Structural\Workflow\Transitions;

use App\DesignPattern\Structural\Workflow\States\Review;
use App\DesignPattern\Structural\Workflow\States\StateInterface;

class ToReview implements TransitionInterface
{

    public function execute():StateInterface
    {
        echo "Transicao para o estado de Em revisao.\n";
        return new Review();
    }
    
}