<?php
namespace App\DesignPattern\Advanced\GradualExample5;


class SettingsFactory
{
   
    public static function createSettings(string $type):Settings
    {
      $strategy = SettingsStrategyRegistry::getStrategy($type);
       return $strategy->createSettings();

        
    }
}