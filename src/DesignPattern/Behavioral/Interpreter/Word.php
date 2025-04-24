<?php

namespace App\DesignPattern\Behavioral\Interpreter;

class Word implements Expression
{
    public function __construct(private string $value){}

    public function interpret(Context $context):string
    {
        return $context[$this->value] ?? $this->value;
        
    }
   
}