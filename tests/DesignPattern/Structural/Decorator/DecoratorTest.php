
<?php

use App\DesignPattern\Structural\Decorator\DiamondDecorator;
use App\DesignPattern\Structural\Decorator\GoldDecorator;
use App\DesignPattern\Structural\Decorator\Ring;
use PHPUnit\Framework\TestCase;

final class DecoratorTest extends TestCase
{

    public function testingWithDiamondsAndsGold():void
    {
        $ring = new Ring();
        $diamondRing = new DiamondDecorator($ring);
        $goldDiamondRing = new GoldDecorator($diamondRing);

        $this->assertEquals(180.0,$goldDiamondRing->cost());
        $this->assertEquals('An elegente ring with diamonds with Gold',
        $goldDiamondRing->description());
        
    }
}