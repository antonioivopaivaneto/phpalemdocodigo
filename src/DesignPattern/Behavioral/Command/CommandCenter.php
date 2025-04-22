<?php

namespace App\DesignPattern\Behavioral\Command;

class CommandCenter
{
    public function __construct(private MilitaryCommand $militaryCommand)
    {
        
    }

    public function initiateAttack():void 
    {
        $attackCommand = new AttackCommand();
        $this->militaryCommand->addCommand($attackCommand);
        
    }

    public function initiateDefense():void 
    {
        $defendCommand = new DefendCommand();
        $this->militaryCommand->addCommand($defendCommand);
        
    }

    public function executeOperations():void
    {
        $this->militaryCommand->executeCommands();
    }
}