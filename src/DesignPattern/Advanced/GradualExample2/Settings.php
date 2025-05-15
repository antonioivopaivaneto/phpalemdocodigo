<?php

namespace App\DesignPattern\Advanced\GradualExample2;

final class Settings
{
    public function __construct(private string $action)
    {
        
    }
    public function getAction():string 
    {
        return $this->action;
        
    }
}