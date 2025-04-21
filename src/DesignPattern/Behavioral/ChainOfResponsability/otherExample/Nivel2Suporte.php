<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability\otherExample;

class Nivel2Suporte implements Suporte
{
    protected ?Suporte $proximo = null;

    public function setProximoNivel(Suporte $proximo):Suporte
    {
        $this->proximo = $proximo;
        return $proximo;
    }

    public function resolverChamado(string $problema): ?string
    {
        if ($problema === "problema roteador") {
            return "Problema resolvido pelo Suporte de Nível 2. Reconfigure o roteador";
        } elseif ($this->proximo) {
            return $this->proximo?->resolverChamado($problema);
        }
        return null;
    }

}