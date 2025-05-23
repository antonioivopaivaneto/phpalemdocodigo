<?php

namespace App\DesignPattern\Structural\Facede;

use SplObjectStorage;

class OrchestralFacade
{
    private SplObjectStorage $instruments;
    
    public function __construct()
    {
        $this->instruments = new SplObjectStorage();
        
    }

    public function addInstrument(InstrumentInterface $instrument):void
    {        
        $this->instruments->attach($instrument);
    }
    public function perform():string {

        $performance = [];
        foreach($this->instruments as $instrument){
            $performance[] = $instrument->play();
        }
        return implode(', ',$performance);
    }

}