<?php

use App\DesignPattern\Behavioral\TemplateMethod\PastaRecipe;
use App\DesignPattern\Behavioral\TemplateMethod\RiceRecipe;
use PHPUnit\Framework\TestCase;

class TemplateMethodTest extends TestCase
{

    public function testPastaRecipe():void
    {
        $recipe = new PastaRecipe();
        $this->expectOutputString(
            "Boiling water.\n".
            "Adding pasta.\n".
            "Cooking ingredients.\n".
            "Adding salt and herbs.\n".
            "Serving the dish.\n"
        );
        $recipe->prepareDish();
        
    }

    public function testRiceRecipe()
    {
        $recipe = new RiceRecipe();
        $this->expectOutputString(
            "Boiling water.\n".
            "Adding rice.\n".
            "Cooking ingredients.\n".
            "Adding saffron and spices.\n".
            "Serving the dish.\n"
        );
        $recipe->prepareDish();
        
    }
}