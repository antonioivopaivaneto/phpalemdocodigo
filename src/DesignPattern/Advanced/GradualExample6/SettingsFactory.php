<?php
namespace App\DesignPattern\Advanced\GradualExample6;


class SettingsFactory
{
   
    public static function createSettings(string $type):Settings
    {
      $strategy = SettingsStrategyRegistry::getStrategy($type);
       return $strategy->createSettings();

        
    }
}