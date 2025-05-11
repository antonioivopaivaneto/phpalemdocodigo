<?php

use App\DesignPattern\Behavioral\Visitor\AdventurousTourist;
use App\DesignPattern\Behavioral\Visitor\Beach;
use App\DesignPattern\Behavioral\Visitor\Museum;
use PHPUnit\Framework\TestCase;

use function PHPUnit\Framework\assertSame;

final class AdventurousTouristTest extends TestCase
{
    public function testCanVisitMuseum():void
    {
        $museum = $this->createMock(Museum::class);
        $museum->method('admireArt')->willReturn('Admiring art in the museum');

        $tourist = new AdventurousTourist();
        $result = $tourist->visitMuseum($museum);
        
        $this->assertSame('Admiring art in the museum',$result);
        
    }

    public function testCanVisitBeach():void
    {

        $beach = $this->createMock(Beach::class);
        $beach->method('relax')->willReturn("Relaxing on the beach");

        $tourist = new AdventurousTourist();
        $result = $tourist->visitBeach($beach);
        
        $this->assertSame('Relaxing on the beach',$result);
    }
}