<?php

use App\DesignPattern\Behavioral\Command\CommandCenter;
use App\DesignPattern\Behavioral\Command\MilitaryCommand;
use PHPUnit\Framework\TestCase;

final class CommandTest extends TestCase
{
    public function testCommandCenter():void
    {
        $commander = new MilitaryCommand();
        $commandCenter = new CommandCenter($commander);

        $commandCenter->initiateAttack();
        $commandCenter->initiateDefense();

        $this->expectOutputString("Attack!\nDefend!\n");
        $commandCenter->executeOperations();
        
    }

    public function testCommandAttack():void 
    {
        $commander = new MilitaryCommand();
        $commandCenter = new CommandCenter($commander);

        $commandCenter->initiateAttack();

        $this->expectOutputString("Attack!\n");
        $commandCenter->executeOperations();
        
    }

    public function testCommandDefend():void 
    {
        $commander = new MilitaryCommand();
        $commandCenter = new CommandCenter($commander);

        $commandCenter->initiateDefense();

        $this->expectOutputString("Defend!\n");
        $commandCenter->executeOperations();
        
    }
    public function testCommandEmpty():void 
    {
        $commander = new MilitaryCommand();
        $commandCenter = new CommandCenter($commander);

        $this->expectOutputString("");
        $commandCenter->executeOperations();
        
    }
    public function testCommandMultiple():void 
    {
        $commander = new MilitaryCommand();
        $commandCenter = new CommandCenter($commander);

        $commandCenter->initiateAttack();
        $commandCenter->initiateDefense();
        $commandCenter->initiateAttack();

        $this->expectOutputString("Attack!\nDefend!\nAttack!\n");
        $commandCenter->executeOperations();
        
    }
}