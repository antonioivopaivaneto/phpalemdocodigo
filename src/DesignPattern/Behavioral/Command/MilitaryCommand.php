<?php

namespace App\DesignPattern\Behavioral\Command;

use SplQueue;

class MilitaryCommand
{
    private SplQueue $commands;

    public function __construct()
    {
        $this->commands = new SplQueue();
    }

    public function addCommand(Command $command):void
    {
        $this->commands->enqueue($command);        
    }
    public function executeCommands():void 
    {
        foreach($this->commands as $command){
            echo $command->execute();
        }
        
    }
}