<?php

namespace App\DesignPattern\Behavioral\Interpreter;

use App\DesignPattern\Behavioral\Interpreter\Context;
use App\DesignPattern\Behavioral\Interpreter\Expression;
use PhpParser\Node\Expr\Cast\String_;

class LanguageProcessor
{
    public function execute(Expression $expression,Context $context):String
    {
        return $expression->interpret($context);
        
    }
}