<?php

namespace App\DesignPattern\Behavioral\ChainOfResponsability\otherExample;

class Nivel3Suporte implements Suporte
{
    protected ?Suporte $proximo = null;

    public function setProximoNivel(Suporte $proximo):Suporte
    {
        $this->proximo = $proximo;
        return $proximo;
    }

    public function resolverChamado(string $problema): ?string
    {
        return "Encaminhando ao engenheiro de rede: analisando flaha critica." ;
        
    }

}