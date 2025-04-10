<?php

namespace App\DesignPattern\Structural\Bridge;

class SqliteDriver implements DatabaseDriver
{
    public function query(string $sql):array{
        return ["SQLite Result 1", "SQLite Result 2"];
    }
    
}
