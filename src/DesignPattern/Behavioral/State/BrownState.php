<?php


namespace App\DesignPattern\Behavioral\State;


class BrownState implements ChamaleaonState
{
    public function changeColor(Chamaleon $chameleon): void
    {
        echo "Mudando para a cor marron\n";
        $chameleon->setState(new BlueState());
    }
}