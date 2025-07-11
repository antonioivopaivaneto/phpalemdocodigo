<?php


namespace DesignPattern\Advanced\SmartHome\Listeners;

use DesignPattern\Advanced\SmartHome\Commands\Command;
use DesignPattern\Advanced\SmartHome\Devices\SmartDevice;
use DesignPattern\Advanced\SmartHome\Events\Event;
use DesignPattern\Advanced\SmartHome\Events\EventManager;
use DesignPattern\Advanced\SmartHome\States\ObjectState;

class VacationModeListener implements EventListener, Command
{

    public function __construct(
        private readonly SmartDevice $device,
        private readonly EventManager $eventManager = new EventManager()
    ){}

    public function handle(Event $event): void
    {
        $this->eventManager->pushState(
            new ObjectState(clone $this->device)
        );

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