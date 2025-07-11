<?php

namespace DesignPattern\Advanced\SmartHome\Commands;

interface Command
{
    public function execute(): void;
    public function undo(): void;
}