<?php

namespace App\DesignPattern\Behavioral\Command;


class AttackCommand implements Command
{
    public function execute():string
    {
        return "Attack!\n";
    }
}

