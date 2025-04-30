<?php

use App\DesignPattern\Behavioral\Memento\Librarian;
use App\DesignPattern\Behavioral\Memento\Person;
use PHPUnit\Framework\TestCase;

final class MementoTest extends TestCase
{
    public function testMementoPattern():void
    {
        $person = new Person();
        $librarian = new Librarian();

        $person->setState('State 1');
        $librarian->addMemoryCapsule($person->saveToMemoryCapsule());

        $initialState = $librarian->getMemoryCapsule();
        $this->assertEquals('State 1',$initialState->getState());
        $librarian->addMemoryCapsule($initialState);

        //change sate and save it to memory capsule
        $person->setState('State 2');
        $librarian->addMemoryCapsule($person->saveToMemoryCapsule());

        $newState = $librarian->getMemoryCapsule();
        $this->assertEquals('State 2',$newState->getState());
        $librarian->addMemoryCapsule($newState);


        $librarian->getMemoryCapsule();
        $restoredMemoryCapsule = $librarian->getMemoryCapsule();

        if($restoredMemoryCapsule !== null){
            $person->restoreFromMemoryCapsule($restoredMemoryCapsule);
        }

        $this->assertEquals('State 1',$person->saveToMemoryCapsule()->getState());




        
    }
}