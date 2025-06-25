<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

abstract class Logger
{
    protected ?Logger $next = null;
    protected LogStrategy $strategy;

    public function setNext(Logger $next): void
    {
        $this->next = $next;
    }
    public function setStrategy(LogStrategy $strategy):void
    {
        $this->strategy = $strategy;
    }
    public function log(string $message):void
    {
        $formatedMessage = $this->strategy->format($message);
        $this->writeLog($formatedMessage);
        if($this->next !== null){
            $this->next->log($message);
        }
    }

    abstract protected function writeLog(string $message):void;
}