<?php

namespace App\DesignPattern\Behavioral\Strategy;


class SiegeStrategy implements BattleStrategy
{
    public function execute():string
    {
        return "cerco ao inimigo, corte seus suprimentos";
    }
}