<?php

use App\DesignPattern\Creational\Singleton\President;
use PHPUnit\Framework\TestCase;

final class PresidentTest extends TestCase
{

    public function testInstancesShouldBeIdentical():void
    {
        $firstInstance = President::getInstance();
        $secondInstance = President::getInstance();

        $this->assertSame($firstInstance,$secondInstance);

    }

    public function testInstantiationShouldThrowError():void
    {
        $this->expectException(Error::class);
        $instance = new President();

    }

    public function testCloningShouldThrowError():void
    {
        $this->expectException(Error::class);
        $instance = President::getInstance();
        $clone = clone $instance;
    }

    public function testSerializationSholudThrowLogicException():void
    {
        $this->expectException(LogicException::class);
        $this->expectExceptionMessage('cannot serialize a President');
        $instance = President::getInstance();
        $serialize = serialize($instance);
    }

    public function testUnserializationShouldThowLogicException():void
    {
        $this->expectException(LogicException::class);
        $instance = President::getInstance();
        $serialize = serialize($instance);
        $unserialize = unserialize($serialize);
    }

}