<?php

use App\DesignPattern\Behavioral\Interpreter\Concat;
use App\DesignPattern\Behavioral\Interpreter\Context;
use App\DesignPattern\Behavioral\Interpreter\LanguageProcessor;
use App\DesignPattern\Behavioral\Interpreter\Sentence;
use App\DesignPattern\Behavioral\Interpreter\Word;
use PHPUnit\Framework\TestCase;

final class InterpreterTest extends TestCase
{

    public function testWordInterpret():void
    {
        $context = new Context();
        $context->set("greeting","hello");

        $word = new Word("greeting");
        $result = $word->interpret($context);

        $this->assertEquals("hello",$result);
        
    }


    public function testSentenceInterpret():void 
    {
        $context = new Context();
        $context->set("hello","Ola");
        $context->set("world","mundo");

        $sentence = new Sentence(new Word("hello"), new Word("world"));
        $result = $sentence->interpret($context);
        $this->assertEquals("Ola mundo", $result);
        
    }

    public function testConcatInterpret():void
    {
        $context = new Context();
        $context->set("begin","Start");
        $context->set("end","End");
        $context->set("middle","Middle");

        $concat = new Concat(
            new Sentence(new Word("begin")),
            new Sentence(new Word("middle")),
            new Sentence(new Word("end"))
        );

        $result = $concat->interpret($context);
        $this->assertEquals("Start Middle End", $result);
        
    }


    public function testLanguageProcessor():void
    {
        $context = new Context();
        $context->set("greeting","hello");
        $context->set("world","mundo");

        $sentence = new Sentence(new Word("greeting"), new Word("world"));
        $processor = new LanguageProcessor();
        $result = $processor->execute($sentence, $context);
        $this->assertEquals("hello mundo", $result);

        
    }

    public function testLanguageWithoutContext():void
    {
        $context = new Context();
        $context->set("","");
        $context->set("","");

        $sentence = new Sentence(new Word("greeting"), new Word("world"));
        $processor = new LanguageProcessor();
        $result = $processor->execute($sentence, $context);
        $this->assertNotEquals("hello mundo", $result);

        
    }

}