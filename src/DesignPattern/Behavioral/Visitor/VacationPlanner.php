<?php

namespace App\DesignPattern\Behavioral\Visitor;

use SplObjectStorage;
class VacationPlanner
{
    private SplObjectStorage $touristAttractions;

    public function __construct()
    {
        $this->touristAttractions = new SplObjectStorage();
        
    }

    public function addAttraction(TouristAttraction $attraction):void
    {
        $this->touristAttractions->attach($attraction);
        
    }

    public function removeAttraction(TouristAttraction $attraction)
    {
        $this->touristAttractions->detach($attraction);
    }
    public function arrangeTour(Tourist $tourist):void
    {
        foreach($this->touristAttractions as $attraction){
            $attraction->accept($tourist);

        }
        
    }
}