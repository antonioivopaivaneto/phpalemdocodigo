<?php
namespace App\DesignPattern\Creational\FactoryMethod;

abstract class TalentFactory
{
    abstract function createArtist():Artist;

    public function showPerformance():string
    {
        $artist = $this->createArtist();
        return $artist->perform();
    }
}