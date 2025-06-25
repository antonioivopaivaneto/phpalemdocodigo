<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

class ConsoleLogger extends Logger
{
    protected function writeLog(string $message): void
    {
        echo "Writing to console: $message\n";
    }
}