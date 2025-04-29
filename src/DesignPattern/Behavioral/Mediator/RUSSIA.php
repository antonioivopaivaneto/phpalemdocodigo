<?php
namespace App\DesignPattern\Behavioral\Mediator;

class RUSSIA extends Country
{
    public function send(string $message):void
    {
        echo "RUSSIA enviando mensagem: $message\n";
        $this->mediator->send($message,$this);
        
    }
    public function receive(string $message):void
    {
        echo "RUSSIA recebeu a mensagem: $message\n";
        
    }

}