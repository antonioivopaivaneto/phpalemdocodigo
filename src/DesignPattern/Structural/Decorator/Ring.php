<?php

namespace App\DesignPattern\Structural\Decorator;

class Ring implements Jewel
{

    public function cost():float 
    {
        return 100.0;
        
    }
    public function description():string 
    {
     
        return "An elegente ring";
    }
}