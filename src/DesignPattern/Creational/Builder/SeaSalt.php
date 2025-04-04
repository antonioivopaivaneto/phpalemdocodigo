<?php

namespace App\DesignPattern\Creational\Builder;

class SeaSalt implements Salt
{

	public function getType(): string
    {
        return 'Sea Salt';
        
    }
}