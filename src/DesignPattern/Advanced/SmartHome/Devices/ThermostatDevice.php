<?php

namespace DesignPattern\Advanced\SmartHome\Devices;


class ThermostatDevice extends SmartDevice
{
    public function modify():void
    {
        $this->status += 2;
    }
}