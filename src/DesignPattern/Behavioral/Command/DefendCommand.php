<?php
namespace App\DesignPattern\Behavioral\Command;


class DefendCommand implements Command
{
    public function execute():string
    {
        return "Defend!\n";
    }
}