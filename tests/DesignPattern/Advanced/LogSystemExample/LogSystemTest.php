<?php

use App\DesignPattern\Advanced\LogSystemExample\ConsoleLogger;
use App\DesignPattern\Advanced\LogSystemExample\EmailNotifier;
use App\DesignPattern\Advanced\LogSystemExample\LoggingSystem;
use App\DesignPattern\Advanced\LogSystemExample\SimpleLogStrategy;
use PHPUnit\Framework\TestCase;

final class LogSystemTest extends TestCase
{

    public function testSimpleLogStrategyFormatsMessage():void
    {
        $strategy = new SimpleLogStrategy();
        $this->assertEquals("[simple] Test", $strategy->format("Test"));
    }

    public function testConsoleLoggerWritersToConsole():void
    {
        ob_start();
        $strategy = new SimpleLogStrategy();
        $logger = new ConsoleLogger();
        $logger->setStrategy($strategy);
        $logger->log("Test");
        $output = ob_get_clean();
        $this->assertStringContainsString("[simple] Test\n", $output);
    }
    public function testEmailNotifierSendsEmail():void
    {
        ob_start();
        $notifier = new EmailNotifier();
        $notifier->notify("Test");
        $output = ob_get_clean();
        $this->assertStringContainsString("Email notification sent with message:  Test\n", $output);
    }

     public function testLoggingSystemLogsMessage():void
    {
        ob_start();
        $strategy = new SimpleLogStrategy();
        $logger = new ConsoleLogger();
        $logger->setStrategy($strategy);
        $logginSytem = new LoggingSystem($logger);
        $logginSytem->logMessage("Test");
        $output = ob_get_clean();
        $this->assertStringContainsString("Writing to console: [simple] Test", $output);
    }

    public function testLogginSystemNotifiesObservers():void
    {
       $strategy = new SimpleLogStrategy();
       $logger = new ConsoleLogger();
       $logger->setStrategy($strategy);
       $logginSytem = new LoggingSystem($logger);

       $observer = $this->createMock(EmailNotifier::class);
       $observer->expects($this->once())
        ->method('notify')
        ->with($this->equalTo("Test"));

        $logginSytem->addObserver($observer);
        $logginSytem->logMessage("Test");
    }

    public function testLoggerChainCallsNextLogger():void
    {
        ob_start();

        $strategy = new SimpleLogStrategy();

        $logger1 = new ConsoleLogger();
        $logger1->setStrategy($strategy);

        $logger2 = new ConsoleLogger();
        $logger2->setStrategy($strategy);

        $logger1->setNext($logger2);

        $logger1->log("Test");

        $output = ob_get_clean();

        $this->assertStringContainsString("Writing to console: [simple] Test", $output);

        $this->assertEquals(2,substr_count($output, "Writing to console: [simple] Test"));
    }

}