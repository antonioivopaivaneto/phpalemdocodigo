<?php

namespace App\DesignPattern\Advanced\GradualExample5;


class ProductSettingsStrategy implements SettingsStrategy
{
    public function createSettings():Settings
    {
        return new Settings('create_product');
        
    }
}