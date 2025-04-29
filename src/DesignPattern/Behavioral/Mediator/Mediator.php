<?php
namespace App\DesignPattern\Behavioral\Mediator;

interface Mediator{
    public function send(string $message, Country $country):void ;
}