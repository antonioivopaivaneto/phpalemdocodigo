<?php

namespace App\DesignPattern\Behavioral\Mediator;

abstract class Country{

    public function __construct(protected Mediator $mediator)
    {}

    public abstract function send(string $message):void;
    public abstract function receive(string $message):void;

}