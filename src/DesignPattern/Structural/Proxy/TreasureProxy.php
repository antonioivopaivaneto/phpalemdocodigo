<?php

namespace App\DesignPattern\Structural\Proxy;

class TreasureProxy implements Treasure
{
    private ?Treasure $realTReasure = null;
    
    public function open():string
    {
        if($this->realTReasure === null)
        {
            $this->realTReasure = new RealTreasure();
        }
       return "Proxy: ". $this->realTReasure->open();
        
    }
}