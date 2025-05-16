<?php

namespace App\DesignPattern\Advanced\GradualExample6;


class ProductSettingsStrategy implements SettingsStrategy
{
    public function createSettings():Settings
    {
        return new Settings('create_product');
        
    }
}