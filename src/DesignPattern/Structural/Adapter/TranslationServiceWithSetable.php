<?php

namespace App\DesignPattern\Structural\Adapter;


final class TranslationServiceWithSetable
{
    private TranslatorInterface $translator;
    private bool $translatorLocked = false;

    public function __construct(TranslatorInterface $translator)
    {
        $this->translator = $translator;
    }

    public function requestTranslation(string $text, string $toLanguage): string
    {
        return $this->translator->translate($text, $toLanguage);
    }

    public function setTranslator(TranslatorInterface $translator): void
    {
        if ($this->translatorLocked) {
            throw new \LogicException("O tradutor não pode ser alterado após o primeiro uso.");
        }

        $this->translator = $translator;
    }

    public function lockTranslator(): void
    {
        $this->translatorLocked = true;
    }
}
