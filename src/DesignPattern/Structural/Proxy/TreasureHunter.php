<?php

namespace App\DesignPattern\Structural\Proxy;

class TreasureHunter
{
    public function __construct(private Treasure $TReasure)
    {}

    public function searchTreasure():string
    {
        return $this->TReasure->open();
        
    }

}