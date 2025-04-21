<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability;

class WiserElder extends WiseElder
{
    public function advise(string $problemType): ?string
    {
        if ($problemType === "complex") {
            return "Think before you act.";
        } else if ($this->nextElder) {
            return $this->nextElder->advise($problemType);
        }
        return null;
    }
}
