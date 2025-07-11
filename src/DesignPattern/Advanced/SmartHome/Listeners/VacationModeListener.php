<?php


namespace App\DesignPattern\Advanced\SmartHome\Listeners;

use App\DesignPattern\Advanced\SmartHome\Commands\Command;
use App\DesignPattern\Advanced\SmartHome\Devices\SmartDevice;
use App\DesignPattern\Advanced\SmartHome\Events\Event;
use App\DesignPattern\Advanced\SmartHome\Events\EventManager;
use App\DesignPattern\Advanced\SmartHome\States\ObjectState;

class VacationModeListener implements EventListener, Command
{

    public function __construct(
        private readonly SmartDevice $device,
        private readonly EventManager $eventManager
    ){}

    public function handle(Event $event): void
    {
        $this->eventManager->pushState(new ObjectState(clone $this->device));

        $this->execute();
    }

    public function execute():void
    {
        $this->device->modify();

    }

    public function undo():void
    {
        $state = $this->eventManager->popState();

        if($state !== null){
            $restoredDevice = $state->getState();
            $this->device->setStatus($restoredDevice->getStatus());
        }
    }


}