<?php
namespace App\DesignPattern\Structural\Workflow\Logger;

interface LoggerInterface
{
    public function log(string $message):void;
}