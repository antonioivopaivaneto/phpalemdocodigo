<?php
namespace App\DesignPattern\Creational\Builder;


interface BreadBuilder{
    public function addYeast():void;
    public function addSalt():void;
    public function getResult():Bread;
}
