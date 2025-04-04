<?php

use App\DesignPattern\Creational\FactoryMethod\DanceFactory;
use App\DesignPattern\Creational\FactoryMethod\SingingFactory;
use PHPUnit\Framework\TestCase;

final class FactoryMethodTest extends TestCase
{

    public function testDanceFactory():void
    {
        $factory = new DanceFactory();
        $performance = $factory->showPerformance();

        $this->assertEquals('Dancing gracefully!',$performance);
    }
    public function testSingingFactory():void
    {
        $factory = new SingingFactory();
        $performance = $factory->showPerformance();

        $this->assertEquals('Singing melodiously!',$performance);
    }
}