<?php

namespace App\DesignPattern\Structural\Adapter;


class MicrosoftTranslate implements TranslatorInterface
{
    public function translate(string $text, string $toLanguage): string
    {
        return "Translated by Microsoft: {$text} to {$toLanguage}";
    }
}