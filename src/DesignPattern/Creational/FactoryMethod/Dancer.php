<?php
namespace App\DesignPattern\Creational\FactoryMethod;

class Dancer implements Artist
{
    public function perform():string
    {
        return 'Dancing gracefully!';

    }
}