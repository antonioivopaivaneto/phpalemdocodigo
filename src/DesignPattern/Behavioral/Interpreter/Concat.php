<?php

namespace App\DesignPattern\Behavioral\Interpreter;

use ArrayObject;
class Concat implements Expression
{
    use InterpreterHelper;

    private ArrayObject $sentences;

    public function __construct(Expression ...$sentences)
    {
        $this->sentences = new ArrayObject($sentences);


    }
    public function interpret(Context $context):string
    {
        return  $this->process($this->sentences,$context);
        
    }
   
}