<?php

namespace App\DesignPattern\Advanced\SmartHome\Listeners;

use App\DesignPattern\Advanced\SmartHome\Events\Event;

interface EventListener
{
    public function handle(Event $event):void;
}