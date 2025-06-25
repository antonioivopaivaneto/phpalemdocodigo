<?php

namespace App\DesignPattern\Advanced\LogSystemExample;

interface LogStrategy
{
    public function format(string $message):string;
}