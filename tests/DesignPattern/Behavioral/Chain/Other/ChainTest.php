<?php

use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel1Suporte;
use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel2Suporte;
use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel3Suporte;
use PHPUnit\Framework\TestCase;

final class ChainTest extends TestCase
{

    public function testChain(): void
    {
        $nivel1 = new Nivel1Suporte();
        $nivel2 = new Nivel2Suporte();
        $nivel3 = new Nivel3Suporte();


        $nivel1->setProximoNivel($nivel2)->setProximoNivel($nivel3);


        $this->assertEquals("Encaminhando ao engenheiro de rede: analisando flaha critica.", $nivel1->resolverChamado("Erro desconhecido"));
        $this->assertEquals("Problema resolvido pelo Suporte de Nível 1.", $nivel1->resolverChamado("modem Desligado"));
        $this->assertEquals("Problema resolvido pelo Suporte de Nível 2. Reconfigure o roteador", $nivel1->resolverChamado("problema roteador"));
        $this->assertEquals("Encaminhando ao engenheiro de rede: analisando flaha critica.", $nivel1->resolverChamado("falha critica"));

    }
}
