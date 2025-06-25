<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

interface LogObserver
{
    public function notify(string $message):void;
}