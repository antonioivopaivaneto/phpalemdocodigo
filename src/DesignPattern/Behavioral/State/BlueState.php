<?php


namespace App\DesignPattern\Behavioral\State;


class BlueState implements ChamaleaonState
{
    public function changeColor(Chamaleon $chameleon): void
    {
        echo "Mudando para a cor azul\n";
        $chameleon->setState(new GreenState());
    }
}