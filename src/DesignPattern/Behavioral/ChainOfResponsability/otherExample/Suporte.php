<?php
namespace App\DesignPattern\Behavioral\ChainOfResponsability\otherExample;


interface Suporte
{
    public function setProximoNivel(Suporte $suporte): Suporte;
    public function resolverChamado(string $problema): ?string;
}