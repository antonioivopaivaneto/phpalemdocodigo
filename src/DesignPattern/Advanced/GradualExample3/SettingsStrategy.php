<?php

namespace App\DesignPattern\Advanced\GradualExample3;

interface SettingsStrategy
{
    public function createSettings():Settings;
}