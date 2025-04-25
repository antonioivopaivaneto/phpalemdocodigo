<?php
namespace App\DesignPattern\Behavioral\Iterator;

use Countable;
use Iterator;

class Ruin implements RoomAggregate,Countable
{
    public function __construct(private RoomCollection $rooms)
    {
        
    }

    public function getIterator(): Iterator
    {
        return $this->rooms->getIterator();
        
    }

    public function count():int 
    {
        return $this->rooms->count();
        
    }
   
}