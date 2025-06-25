<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

class EmailNotifier implements LogObserver
{
    public function notify(string $message):void
    {
        echo "Email notification sent with message:  $message\n";
    }
}