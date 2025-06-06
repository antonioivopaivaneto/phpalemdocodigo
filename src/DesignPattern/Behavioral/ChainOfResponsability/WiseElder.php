<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability;

class WiseElder extends NoviceElder
{
    public function advise(string $problemType): ?string
    {
        if ($problemType === "simple") {
            return "Use common sense.";
        } else if ($this->nextElder) {
            return $this->nextElder->advise($problemType);
        }
        return null;
    }
}
