<?php


namespace App\DesignPattern\Advanced\SmartHome\Events;

class Event
{
    public function __construct(private String $type)
    {
        
    }
    public function getType():string
    {
        return $this->type;
        
    }
}