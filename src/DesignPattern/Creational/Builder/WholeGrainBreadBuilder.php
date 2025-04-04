<?php

namespace App\DesignPattern\Creational\Builder;

class WholeGrainBreadBuilder implements BreadBuilder
{
    private Bread $bread;

    public function __construct()
    {
        $this->bread = new WholeGrainBread();
    }


	public function addYeast(): void
	{
		// Implement the setYeast method
		$this->bread->setYeast(new ActiveYeast()) ;
	}
	public function addSalt(): void
	{
		// Implement the setSalt method
		$this->bread->setSalt(new SeaSalt()) ;
	}
    public function getResult(): Bread
    {
   
		return $this->bread;
	
    }
	
}