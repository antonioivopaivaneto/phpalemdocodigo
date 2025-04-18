<?php
namespace App\DesignPattern\Structural\Workflow\Logger;

class SimpleLogger implements LoggerInterface
{
    public function log(string $message):void
    {
        echo $message . "\n";


    }
}