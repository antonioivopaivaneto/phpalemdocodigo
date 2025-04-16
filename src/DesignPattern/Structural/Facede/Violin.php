<?php
namespace App\DesignPattern\Structural\Facede;


class Violin implements InstrumentInterface{

    public function play():string 
    {
        return "play violin";
        
    }

}