<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability;

class WisestOfAllElder extends WiserElder
{
    public function advise(string $problemType): ?string
    {
            return "Take a deep breath and consider the Universe.";
       
    }
}
