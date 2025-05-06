<?php

use App\DesignPattern\Behavioral\State\BlueState;
use App\DesignPattern\Behavioral\State\BrownState;
use App\DesignPattern\Behavioral\State\Chamaleon;
use App\DesignPattern\Behavioral\State\GreenState;
use PHPUnit\Framework\TestCase;

class ChameleonTest extends TestCase
{

    public function testInitialStateIsgreen():void
    {
        $chameleon = new Chamaleon(new GreenState());
        $this->assertInstanceOf(GreenState::class,$chameleon->getState());
        
    }

    public function testStateChangesFromGreenToBrown()
    {
        $chameleon = new Chamaleon(new GreenState());
        $chameleon->changeState();
        $this->assertInstanceOf(BrownState::class,$chameleon->getState());
        
    }

    public function testStateChangesFromBlueToGreen()
    {
        $chameleon = new Chamaleon(new BlueState());
        $chameleon->changeState();
        $this->assertInstanceOf(GreenState::class,$chameleon->getState());
        
    }

    public function testeStateChangeSequence()
    {
        ob_start();
        $chameleon = new Chamaleon(new GreenState());
        $chameleon->changeState();
        $chameleon->changeState();
        $chameleon->changeState();
        $chameleon->changeState();

        $output = ob_get_clean();
        echo $output;
        echo "-------------\n";

        $expectedOutput = "Mudando para a cor verde\n"
            . "Mudando para a cor marron\n"
            . "Mudando para a cor azul\n"
            . "Mudando para a cor verde\n";

            echo $expectedOutput;

            $this->assertEquals($expectedOutput, $output);
        
    }
    
}