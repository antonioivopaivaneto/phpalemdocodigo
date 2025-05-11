<?php

namespace App\DesignPattern\Behavioral\TemplateMethod;


class RiceRecipe extends AbstractRecipe
{
     public function addPrimaryIngredients():void
    {
        echo "Adding rice.\n";
        
    }
    public function addSeasonings():void
    {
        echo "Adding saffron and spices.\n";
        
    }
}