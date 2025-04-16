<?php
namespace App\DesignPattern\Structural\Facede;


class Drums implements InstrumentInterface{

    public function play():string 
    {
        return "play drums";
        
    }

}