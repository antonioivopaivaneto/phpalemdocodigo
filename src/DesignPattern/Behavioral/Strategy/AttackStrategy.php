<?php

namespace App\DesignPattern\Behavioral\Strategy;


class AttackStrategy implements BattleStrategy
{
    public function execute():string
    {
        return "ataque direto ao inimigo";
    }
}