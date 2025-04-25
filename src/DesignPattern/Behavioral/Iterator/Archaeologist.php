<?php
namespace App\DesignPattern\Behavioral\Iterator;


class Archaeologist
{
    public function __construct(private RoomAggregate $location)
    {
        
    }

    public function explorer() 
    {
        $iterator = $this->location->getIterator();

        echo "Explorando as ruinas...\n";
        foreach($iterator as $room) {
            echo "Entrando na sala: $room\n";
        }
        
    }
}