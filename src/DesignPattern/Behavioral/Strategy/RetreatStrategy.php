<?php

namespace App\DesignPattern\Behavioral\Strategy;


class RetreatStrategy implements BattleStrategy
{
    public function execute():string
    {
        return "retirada estratégica";
    }
}