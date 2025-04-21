<?php

require_once __DIR__ . '/../../../../../../vendor/autoload.php';
use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel1Suporte;
use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel2Suporte;
use App\DesignPattern\Behavioral\ChainOfResponsability\otherExample\Nivel3Suporte;

$nivel1 = new Nivel1Suporte();
$nivel2 = new Nivel2Suporte();
$nivel3 = new Nivel3Suporte();


$nivel1->setProximoNivel($nivel2)->setProximoNivel($nivel3);


echo $nivel1->resolverChamado("modem Desligado") . PHP_EOL; // Problema resolvido pelo Suporte de Nível 1.
echo $nivel1->resolverChamado("problema roteador") . PHP_EOL; // Problema resolvido pelo Suporte de Nível 2. Reconfigure o roteador
echo $nivel1->resolverChamado("falha critica") . PHP_EOL; // Encaminhando ao engenheiro de rede: analisando flaha critica.