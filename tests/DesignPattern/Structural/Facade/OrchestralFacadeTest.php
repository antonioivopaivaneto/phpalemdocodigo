<?php

use App\DesignPattern\Structural\Facede\Drums;
use App\DesignPattern\Structural\Facede\OrchestraClient;
use App\DesignPattern\Structural\Facede\OrchestralFacade;
use App\DesignPattern\Structural\Facede\Trumpet;
use App\DesignPattern\Structural\Facede\Violin;
use PHPUnit\Framework\TestCase;

final class OrchestralFacadeTest extends TestCase
{

    public function testOrchestraPerformance():void
    {
        $orchestraFacede = new OrchestralFacade();
        $orchestraFacede->addInstrument(new Violin());
        $orchestraFacede->addInstrument(new Trumpet());
        $orchestraFacede->addInstrument(new Drums());

        $orchestraClient = new OrchestraClient($orchestraFacede);

        $result = $orchestraClient->orchestratePerformence();

        $this->assertEquals("play violin, play trumpet, play drums",$result);
        
    }

    public function testOrchestraPerfomenaceWithNoInstruments() 
    {
        $facede = new OrchestralFacade();
        $client = new OrchestraClient($facede);

        $result = $client->orchestratePerformence();

        $this->assertEquals('',$result);
        
    }
}