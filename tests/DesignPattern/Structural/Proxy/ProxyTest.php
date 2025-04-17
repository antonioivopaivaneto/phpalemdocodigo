<?php

use App\DesignPattern\Structural\Proxy\TreasureHunter;
use App\DesignPattern\Structural\Proxy\TreasureProxy;
use PHPUnit\Framework\TestCase;

final class ProxyTest extends TestCase
{

    public function testProxy():void
    {
        $proxy = new TreasureProxy();

        $this->assertEquals("Proxy: You've accessed the real treasure!",$proxy->open());


        $tresureHunterProxy = new TreasureHunter($proxy);
        $this->assertEquals("Proxy: You've accessed the real treasure!",$tresureHunterProxy->searchTreasure());
        
    }

}