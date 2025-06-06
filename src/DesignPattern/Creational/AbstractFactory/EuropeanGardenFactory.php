<?php
namespace App\DesignPattern\Creational\AbstractFactory;


class EuropeanGardenFactory implements BotanicalFactory
{
	public function createFlower():Flower
	{
		return new Rose();
	}

	public function createTree():Tree
	{
		return new Oak();
	}
}