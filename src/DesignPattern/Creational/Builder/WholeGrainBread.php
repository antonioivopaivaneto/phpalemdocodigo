<?php

namespace App\DesignPattern\Creational\Builder;

class WholeGrainBread implements Bread
{
    private Yeast $yeast;
    private Salt $salt;

	public function taste(): string
	{
		// Implement the taste method
		return "Gostoso";
	}

	public function setYeast(Yeast $Yeast): void
	{
		// Implement the setYeast method
		$this->yeast = $Yeast;
	}

	public function setSalt(Salt $Salt): void
	{
		// Implement the setSalt method
		$this->salt = $Salt;
	}
}