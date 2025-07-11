<?php

namespace DesignPattern\Advanced\SmartHome\Listeners;

use DesignPattern\Advanced\SmartHome\Events\Event;

interface EventListener
{
    public function handle(Event $event):void;
}