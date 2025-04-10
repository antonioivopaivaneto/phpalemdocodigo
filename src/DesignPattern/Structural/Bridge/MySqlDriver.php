<?php

namespace App\DesignPattern\Structural\Bridge;

class MySqlDriver implements DatabaseDriver
{
    public function query(string $sql):array{
        return ["MySql Result 1", "MySql Result 2"];
    }
    
}
