<?php
namespace App\DesignPattern\Creational\AbstractFactory;

use App\DesignPattern\Creational\AbstractFactory\Tree;

class Oak implements Tree{

    public function height(): string
    {
        return 'Tall!';
    }

}