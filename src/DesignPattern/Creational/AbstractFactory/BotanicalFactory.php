<?php
namespace App\DesignPattern\Creational\AbstractFactory;

interface BotanicalFactory{

    public function createFlower():Flower;
    public function createTree():Tree;
}