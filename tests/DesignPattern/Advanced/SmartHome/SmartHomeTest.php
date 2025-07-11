<?php

use App\DesignPattern\Advanced\SmartHome\Devices\LightDevice;
use App\DesignPattern\Advanced\SmartHome\Devices\ThermostatDevice;
use App\DesignPattern\Advanced\SmartHome\Events\Event;
use App\DesignPattern\Advanced\SmartHome\Events\EventManager;
use App\DesignPattern\Advanced\SmartHome\Listeners\VacationModeListener;
use PHPUnit\Framework\TestCase;

final class SmartHomeTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        EventManager::getInstance()->reset();
    }

    public function testLightDeviceVacationMode():void
    {
        $eventManager =  EventManager::getInstance();
        $lightDevice = new LightDevice();

        $lightListener = new VacationModeListener($lightDevice, $eventManager);
        $eventManager->addListener('vacationMode',$lightListener);

        $eventManager->trigger(new Event('vacationMode'));  
        $this->assertEquals(1, $lightDevice->getStatus());

        $lightListener->undo();
        $this->assertEquals(0,$lightDevice->getStatus());   

    }

    public function testThermostatDeviceInVacationMode():void
    {

        $eventManager = EventManager::getInstance();
        $lightDevice = new LightDevice();
        $thermostatDevice = new ThermostatDevice();

        $lightListener = new VacationModeListener($lightDevice, $eventManager);
        $thermostatListener = new VacationModeListener($thermostatDevice, $eventManager);

        $eventManager->addListener('vacationMode', $lightListener);
        $eventManager->addListener('vacationMode', $thermostatListener);

        $eventManager->trigger(new Event('vacationMode'));
        $this->assertEquals(1, $lightDevice->getStatus());
        $this->assertEquals(2, $thermostatDevice->getStatus());


        $lightListener->undo();
        $thermostatListener->undo();
        $this->assertEquals(0, $lightDevice->getStatus());
        $this->assertEquals(0, $thermostatDevice->getStatus());
    }

    public function testUndoStackFunctionality():void
    {
       $eventManager = EventManager::getInstance();
       $lightDevice = new LightDevice();

       $lightListener = new VacationModeListener($lightDevice, $eventManager);
       $eventManager->addListener('vacationMode',$lightListener, );

       $eventManager->trigger(new Event('vacationMode'));
       $this->assertEquals(1, $lightDevice->getStatus());

       $lightListener->undo();
       $lightListener->undo(); // Calling undo again should not change the status
       $this->assertEquals(0, $lightDevice->getStatus());
    }
}