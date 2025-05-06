<?php


namespace App\DesignPattern\Behavioral\State;


class GreenState implements ChamaleaonState
{
    public function changeColor(Chamaleon $chameleon): void
    {
        echo "Mudando para a cor verde\n";
        $chameleon->setState(new BrownState());
    }
}