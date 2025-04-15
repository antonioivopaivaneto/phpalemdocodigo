<?php

namespace App\DesignPattern\Structural\Composite;

class Painting implements Artwork
{
    public function __construct(private string $title)
    {
        
    }

    public function display(): string
    {
        return "Pintura: {$this->title}";
    }
}