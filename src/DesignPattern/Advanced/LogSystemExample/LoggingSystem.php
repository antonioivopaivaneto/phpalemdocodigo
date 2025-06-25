<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

class LoggingSystem
{

    private Logger $logger;
    private array $observers = [];

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }
        
    public function addObserver(LogObserver $observers):void
    {
        $this->observers[] = $observers;
    }
    public function logMessage(string $message):void
    {
        $this->logger->log($message);
        foreach($this->observers as $observer){
            $observer->notify($message);
        }

    }
}