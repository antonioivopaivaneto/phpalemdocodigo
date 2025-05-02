<?php

use App\DesignPattern\Behavioral\Observer\Guard;
use App\DesignPattern\Behavioral\Observer\Watchtower;
use PHPUnit\Framework\TestCase;

final class ObserverTest extends TestCase
{
    public function testObserverPattern():void 
    {
        $watchtower = new Watchtower();

        //mock
        $guard1 = $this->createMock(Guard::class);
        $guard2 = $this->createMock(Guard::class);


        //condigurando o mock
        $guard1->expects($this->once())
        ->method('update')
        ->with($this->identicalTo($watchtower));


        $guard2->expects($this->once())
        ->method('update')
        ->with($this->identicalTo($watchtower));


        $watchtower->attach($guard1);
        $watchtower->attach($guard2);

        $watchtower->triggerEvent('Invasor avistado');


        $this->assertEquals("Invasor avistado",$watchtower->getEvent());


        
    }
}