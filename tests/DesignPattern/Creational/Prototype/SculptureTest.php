<?php
 

use App\DesignPattern\Creational\Prototype\ConcreteSculpture;
use PHPUnit\Framework\TestCase;

final class SculptureTest extends TestCase
{
    public function testCloneDifferentObjectButSameData():void
    {
        $original = new ConcreteSculpture('marble');
        $clone = $original->clone();

        $this->assertNotSame($original,$clone);
        $this->assertEquals($original->material,$clone->material);
    }
}