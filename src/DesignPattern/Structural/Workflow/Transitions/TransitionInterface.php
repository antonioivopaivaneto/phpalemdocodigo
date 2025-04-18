<?php

namespace App\DesignPattern\Structural\Workflow\Transitions;

use App\DesignPattern\Structural\Workflow\States\StateInterface;

interface TransitionInterface
{

    public function execute():StateInterface;
    
}