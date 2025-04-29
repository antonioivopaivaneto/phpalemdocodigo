<?php

use App\DesignPattern\Behavioral\Mediator\RUSSIA;
use App\DesignPattern\Behavioral\Mediator\UnitedNations;
use App\DesignPattern\Behavioral\Mediator\USA;
use PHPUnit\Framework\TestCase;

final class MediatorTest extends TestCase
{

    public function testMediator():void
    {
        $un = new UnitedNations();
        $usa = new USA($un);
        $russia = new RUSSIA($un);


        $un->addCountry($usa);
        $un->addCountry($russia);

        ob_start();

        $usa->send("Queremos a paz!");
        $russia->send("Queremos a paz tbm!");

        $output = ob_get_clean();

        $this->assertStringContainsString("USA enviando mensagem: Queremos a paz!", $output);
        $this->assertStringContainsString("RUSSIA recebeu a mensagem: Queremos a paz!", $output);
        
    }
}