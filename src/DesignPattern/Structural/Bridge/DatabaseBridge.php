<?php

namespace App\DesignPattern\Structural\Bridge;

class DatabaseBridge
{

    public function __construct(protected DatabaseDriver $driver)
    {
        
    }
    
    public function executeQuery(string $sql):array
    {
        return $this->driver->query($sql);
    }
}
