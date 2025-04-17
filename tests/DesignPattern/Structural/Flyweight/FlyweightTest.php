<?php

use App\DesignPattern\Structural\Flyweight\SquareClient;
use App\DesignPattern\Structural\Flyweight\SquareFactory;
use App\DesignPattern\Structural\Flyweight\UnsharedSquare;
use PHPUnit\Framework\TestCase;

final class FlyweightTest extends TestCase
{
    public function testFlyweightPattern():void
    {
        $factory = new SquareFactory();


        $square1 = $factory->getSquare('red');
        $square2 = $factory->getSquare('red');
        $square3 = $factory->getSquare('blue');

        $this->assertSame($square1,$square2);
        $this->assertNotSame($square1,$square3);

        $this->assertEquals('Rendered a red square at position 1,1',$square1->render('1,1'));

        $unsharedSquare1 = new UnsharedSquare('unique1');
        $unsharedSquare2 = new UnsharedSquare('unique2');

        $this->assertNotSame($unsharedSquare1,$unsharedSquare2);

        $this->assertEquals('Rendered an unshared square at position 1,1, unique attribute: unique1',$unsharedSquare1->render('1,1'));


        $client = new SquareClient($factory);

        $this->expectOutputString(
            "Rendered a red square at position 1,1\n" .
            "Rendered an unshared square at position 1,1, unique attribute: unique\n" .
            "Rendered a red square at position 2,2\n" .
            "Rendered an unshared square at position 2,2, unique attribute: unique\n" .
            "Rendered a red square at position 3,3\n" .
            "Rendered an unshared square at position 3,3, unique attribute: unique\n"
        );
        $client->drawSquares();

    }
}