<?php
namespace App\DesignPattern\Creational\Builder;


interface Bread{
    public function taste():string;
    public function setYeast(Yeast $yeast):void;
    public function setSalt(Salt $salt):void;
}
