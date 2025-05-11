<?php

namespace App\DesignPattern\Behavioral\Visitor;

interface TouristAttraction
{
    public function accept(Tourist $tourist):void;
}