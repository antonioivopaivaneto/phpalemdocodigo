<?php

namespace App\DesignPattern\Creational\Singleton;
use LogicException;

final class President
{

    private static ?President $instance = null;

    private function __construct()
    {
        
    }

    public static function getInstance():President
    {
        if(self::$instance === null){
            self::$instance = new self();

        }
        return self::$instance;
    }

    private function __clone()
    {
        
    }
    public function __sleep()
    {
        throw new LogicException('cannot serialize a President.');
        return [];
    }
    public function __wakeup()
    {
        throw new LogicException('cannot unserialize a President');
    }
}