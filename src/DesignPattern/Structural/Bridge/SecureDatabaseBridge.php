<?php

namespace App\DesignPattern\Structural\Bridge;

class SecureDatabaseBridge extends DatabaseBridge
{


    public function executeSecureQuery(string $sql):array
    {
        return $this->driver->query($sql);
    }
}
