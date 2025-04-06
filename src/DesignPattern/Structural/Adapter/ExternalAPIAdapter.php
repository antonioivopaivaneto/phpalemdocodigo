<?php

namespace App\DesignPattern\Structural\Adapter;

class ExternalAPIAdapter implements TranslatorInterface{
    
    public function __construct(private ExternalTranslationAPI $external){}

    public function translate(string $text, string $toLanguage): string
    {
        return $this->external->doTranslate($text, $toLanguage);
    }

}