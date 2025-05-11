<?php

namespace App\DesignPattern\Behavioral\Visitor;


interface Tourist
{
    public function visitMuseum(Museum $museum):string;
    public function visitBeach(Beach $beach):string;
}