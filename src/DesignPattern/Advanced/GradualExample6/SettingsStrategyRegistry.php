<?php
namespace App\DesignPattern\Advanced\GradualExample6;


class SettingsStrategyRegistry
{
    private static array $strategies = [];

    public static function registerStrategy(
        string $type,SettingsStrategy $strategy
    ){
        self::$strategies[$type] = $strategy;
    }

    public static function getStrategy(string $type):SettingsStrategy
    {
        if(!isset(self::$strategies[$type])){
            throw new \InvalidArgumentException("No strategy registered for type: $type");
        }

        return self::$strategies[$type];
    }
}