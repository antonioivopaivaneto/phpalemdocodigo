<?php

use App\DesignPattern\Creational\AbstractFactory\EuropeanGardenFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function testEuropeanGardenFactory():void{
        $factory = new EuropeanGardenFactory();

        $flower = $factory->createFlower();
        $this->assertEquals('Aromatic!',$flower->smell());

        $tree = $factory->createTree();
        $this->assertEquals('Tall!',$tree->height());
    }
}