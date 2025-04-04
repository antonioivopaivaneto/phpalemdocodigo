<?php

use App\DesignPattern\Creational\Builder\BreadDirector;
use App\DesignPattern\Creational\Builder\WholeGrainBread;
use App\DesignPattern\Creational\Builder\WholeGrainBreadBuilder;
use PHPUnit\Framework\TestCase;

final class BuilderTest extends TestCase
{
    public function testWholeGrainBread():void
    {
        $builder = new WholeGrainBreadBuilder();
        $director = new BreadDirector($builder);

        $bread = $director->buildBread();

        $this->assertInstanceOf(WholeGrainBread::class,$bread);
        $this->assertEquals('Gostoso',$bread->taste());
    }
}