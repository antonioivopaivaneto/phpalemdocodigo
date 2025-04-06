<?php

namespace App\DesignPattern\Structural\Adapter;

interface TranslatorInterface
{
    public function translate(string $text, string $toLanguage):string;
}