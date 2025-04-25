<?php

use App\DesignPattern\Behavioral\Iterator\Archaeologist;
use App\DesignPattern\Behavioral\Iterator\RoomCollection;
use App\DesignPattern\Behavioral\Iterator\Ruin;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{

    public function testIterator():void
    {
        $ruin = new Ruin(RoomCollection::createWithDefaultRooms());

        $achaeologist = new Archaeologist($ruin);

        $iterator = $ruin->getIterator();

        $this->assertEquals(0, $iterator->key());
        $this->assertEquals("Sala 1",$iterator->current());

        $iterator->next();
        $this->assertEquals(1,$iterator->key());
        $this->assertEquals("Sala 2",$iterator->current());

        $iterator->next();
        $this->assertEquals(2,$iterator->key());
        $this->assertEquals("Sala do Tesouro",$iterator->current());

        $iterator->next();
        $this->assertFalse($iterator->valid());

        $iterator->rewind();
        $this->assertEquals(0,$iterator->key());
        $this->assertEquals("Sala 1",$iterator->current());
        
    }
}
