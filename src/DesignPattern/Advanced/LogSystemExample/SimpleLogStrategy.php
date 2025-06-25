<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

class SimpleLogStrategy implements LogStrategy
{
    public function format(string $message):string{
        return "[simple] ". $message;
    }
}