<?php
namespace App\DesignPattern\Behavioral\ChainOfResponsability;

class NoviceElder implements Elder
{
    /**
     * Undocumented variable
     *
     * @var Elder|null
     */
    protected ?Elder $nextElder = null;


    
    public function setNextElder(Elder $elder): Elder
    {
        $this->nextElder = $elder;
        return $elder;
        
    }
    public function advise(string $problemType): ?string
    {
        if ($problemType === "verySimple") {
            return "Just be yourself.";
            
        }else if($this->nextElder){
            return $this->nextElder->advise($problemType);
        }
        return null;
    }

}