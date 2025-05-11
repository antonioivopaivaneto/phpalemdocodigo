<?php

namespace App\DesignPattern\Behavioral\TemplateMethod;


class PastaRecipe extends AbstractRecipe
{
    public function addPrimaryIngredients():void
    {
        echo "Adding pasta.\n";
        
    }
    public function addSeasonings():void
    {
        echo "Adding salt and herbs.\n";
        
    }
}