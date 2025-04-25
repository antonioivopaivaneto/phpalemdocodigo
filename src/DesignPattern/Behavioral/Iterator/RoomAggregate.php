<?php
namespace App\DesignPattern\Behavioral\Iterator;

use Iterator;

interface RoomAggregate
{
    public function getIterator():Iterator;
}