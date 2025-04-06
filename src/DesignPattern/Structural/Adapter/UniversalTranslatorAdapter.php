<?php

namespace App\DesignPattern\Structural\Adapter;

class UniversalTranslatorAdapter implements TranslatorInterface
{
  public function __construct(private TranslatorInterface $translator)
  {
  }

    public function translate(string $text, string $toLanguage): string
    {
        return $this->translator->translate($text, $toLanguage);
    }
}