<?php

namespace App\DesignPattern\Creational\Builder;

class ActiveYeast implements Yeast
{
   

	public function getType(): string
    {
        return 'Active Yeast';
        
    }
}