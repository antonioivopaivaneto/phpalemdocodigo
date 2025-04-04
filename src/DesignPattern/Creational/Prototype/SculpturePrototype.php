<?php

namespace App\DesignPattern\Creational\Prototype;

interface SculpturePrototype{

    public function  clone(): SculpturePrototype;
}