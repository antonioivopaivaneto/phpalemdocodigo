<?php

namespace App\DesignPattern\Advanced\GradualExample5;

interface SettingsStrategy
{
    public function createSettings():Settings;
}