<?php
namespace App\DesignPattern\Creational\Builder;

class BreadDirector{
    private BreadBuilder $builder;

    public function __construct(BreadBuilder $builder)
    {
        $this->builder = $builder;
        
    }

    public function buildBread():Bread
    {
        $this->builder->addYeast();
        $this->builder->addSalt();
        return $this->builder->getResult();

}
}