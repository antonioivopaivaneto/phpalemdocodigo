<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Database;


final class DatabaseConnection
{
    private static array $instances = [];

    private function __construct()
    {
        
    }

    public static function getInstance(string $type = 'mysql'):DatabaseConnection
    {
        if(!isset(self::$instances[$type])){
            self::$instances[$type] = new DatabaseConnection();
        }

        return self::$instances[$type];
    }

    public function executeQuery(string $query):bool
    {
        echo $query;
        return true;

    }
}