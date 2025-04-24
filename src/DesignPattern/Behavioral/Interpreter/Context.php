<?php

namespace App\DesignPattern\Behavioral\Interpreter;

use ArrayObject;
class Context extends ArrayObject
{
    public function set(string $key, string $value):void
    {
        $this[$key]= $value;
        
    }

    public function get(string $key): ?string
    {
        return $this[$key] ?? null;
        
    }

}