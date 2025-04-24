<?php

namespace App\DesignPattern\Behavioral\Interpreter;


interface Expression
{
    public function interpret(Context $context): string;
}