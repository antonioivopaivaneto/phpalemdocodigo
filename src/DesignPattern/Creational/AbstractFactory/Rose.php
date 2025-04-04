<?php
namespace App\DesignPattern\Creational\AbstractFactory;

use App\DesignPattern\Creational\AbstractFactory\Flower;

class Rose implements Flower{

    public function smell(): string
    {
        return 'Aromatic!';
    }

}