<?php

namespace Tests\DesignPattern\Behavioral\Chain;
use App\DesignPattern\Behavioral\ChainOfResponsability\NoviceElder;
use App\DesignPattern\Behavioral\ChainOfResponsability\WiserElder;
use App\DesignPattern\Behavioral\ChainOfResponsability\WisestOfAllElder;
use PHPUnit\Framework\TestCase;

final class ChainOfResponsabilityTest extends TestCase
{
    public function testChain():void 
    {
        $noviceElder = new NoviceElder();
        $wiseElder = new WiserElder();
        $wiserElser = new WiserElder();
        $wisestOfAllElder = new WisestOfAllElder();


        $noviceElder->setNextElder($wiseElder)
            ->setNextElder($wiserElser)
            ->setNextElder($wisestOfAllElder);

            $this->assertSame("Just be yourself.", $noviceElder->advise("verySimple"));
            $this->assertSame("Use common sense.", $noviceElder->advise("simple"));
            $this->assertSame("Think before you act.", $noviceElder->advise("complex"));
            $this->assertSame("Take a deep breath and consider the Universe.",
            $noviceElder->advise("veryComplex"));
            
        
    }
}