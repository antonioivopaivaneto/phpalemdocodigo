<?php

namespace App\DesignPattern\Advanced\GradualExample6;

interface SettingsStrategy
{
    public function createSettings():Settings;
}