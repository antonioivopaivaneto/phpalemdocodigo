<?php

namespace App\DesignPattern\Advanced\GradualExample3;

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