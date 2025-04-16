<?php

namespace App\DesignPattern\Structural\Facede;

class OrchestraClient
{
   
    public function __construct(private OrchestralFacade $orchestra)
    {}

    public function orchestratePerformence()
    {
        return $this->orchestra->perform();
    }

}