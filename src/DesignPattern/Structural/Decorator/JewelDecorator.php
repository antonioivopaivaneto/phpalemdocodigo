<?php

namespace App\DesignPattern\Structural\Decorator;


abstract class JewelDecorator implements Jewel {
    public function __construct(protected Jewel $jewel) {
        
    }

    
}