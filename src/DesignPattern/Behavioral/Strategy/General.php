<?php

namespace App\DesignPattern\Behavioral\Strategy;


class General
{
    public function __construct(private BattleStrategy $strategy) {
        
    }


    public function setStrategy(BattleStrategy $strategy)
    {
        $this->strategy = $strategy;
        
    }

    public function makeDecision()
    {
       return  $this->strategy->execute();
        
    }
}