<?php

namespace App\DesignPattern\Structural\Adapter;


class TranslationService
{
    public function __construct(private TranslatorInterface $translator)
    {
    }
    public function requestTranslation(string $text,string $toLanguage):string
    {
        return $this->translator->translate($text, $toLanguage);
    }
}