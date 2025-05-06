<?php

use App\DesignPattern\Behavioral\Strategy\AttackStrategy;
use App\DesignPattern\Behavioral\Strategy\General;
use App\DesignPattern\Behavioral\Strategy\RetreatStrategy;
use App\DesignPattern\Behavioral\Strategy\SiegeStrategy;
use PHPUnit\Framework\TestCase;

class StrategyTest extends TestCase
{
    public function testStrategyPattern()
    {
        $general = new General(new AttackStrategy);
        $this->assertSame("ataque direto ao inimigo",$general->makeDecision());

        $general->setStrategy(new SiegeStrategy());
        $this->assertSame('cerco ao inimigo, corte seus suprimentos',$general->makeDecision());

        $general->setStrategy(new RetreatStrategy());
        $this->assertSame("retirada estratégica", $general->makeDecision());



        
    }
}