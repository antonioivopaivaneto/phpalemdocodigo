<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability;


interface Elder
{
    public function setNextElder(Elder $elder):Elder;
    public function advise(string $problemType): ?string;

}