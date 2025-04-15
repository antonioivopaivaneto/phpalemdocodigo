<?php

use App\DesignPattern\Structural\Composite\ArtMural;
use App\DesignPattern\Structural\Composite\Painting;
use PHPUnit\Framework\TestCase;

final class ArtworkTest extends TestCase
{
    public function testPaintingDisplay():void
    {
        $painting = new Painting("Mona lisa");
        $expected = "Pintura: Mona lisa";
        $this->assertEquals($expected,$painting->display());
    }

    public function testDisplay():void
    {
        $painting1 = new Painting("Mona lisa");
        $painting2 = new Painting("O Grito");

        $mural = new ArtMural();
        $mural->addArtwork($painting1);
        $mural->addArtwork($painting2);


        $expected = "Exibindo um mural de arte composto por:\n- Pintura: Mona lisa\n- Pintura: O Grito\n";

        /*
        echo $mural->display();
        echo "\nexepcted:\n";
        echo   $expected;

        */
        
        $this->assertEquals($expected,$mural->display());

    }
}