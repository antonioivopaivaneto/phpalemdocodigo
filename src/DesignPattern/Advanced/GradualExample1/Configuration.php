<?php

namespace App\DesignPattern\Advanced\GradualExample1;

use ArrayObject;
use DeepCopy\f011\ArrayObjectExtended;

final class Configuration extends ArrayObject
{
    private static ?Configuration $instance = null;

    private function __construct(array $settings)
    {
        parent::__construct($settings,ArrayObject::ARRAY_AS_PROPS);
    }

    public static function getInstance(array $settings = []):Configuration
    {
        if(self::$instance === null){
            self::$instance= new self($settings);
        }        
        return self::$instance;
    }
}