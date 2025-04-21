<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability\otherExample;

class Nivel1Suporte implements Suporte
{
    protected ?Suporte $proximo = null;

    public function setProximoNivel(Suporte $proximo):Suporte
    {
        $this->proximo = $proximo;
        return $proximo;
    }

    public function resolverChamado(string $problema): ?string
    {
        if ($problema === "modem Desligado") {
            return "Problema resolvido pelo Suporte de Nível 1.";
        } elseif ($this->proximo) {
            return $this->proximo?->resolverChamado($problema);
        }
        return null;
    }

}