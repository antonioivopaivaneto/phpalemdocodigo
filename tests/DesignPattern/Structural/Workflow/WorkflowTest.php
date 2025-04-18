<?php

use App\DesignPattern\Structural\Workflow\Context\StateApplier;
use App\DesignPattern\Structural\Workflow\Context\StateHolder;
use App\DesignPattern\Structural\Workflow\Context\TransitionValidator;
use App\DesignPattern\Structural\Workflow\Facade\WorkflowFacade;
use App\DesignPattern\Structural\Workflow\Logger\SimpleLogger;
use App\DesignPattern\Structural\Workflow\Security\SimpleAuthenticator;
use App\DesignPattern\Structural\Workflow\States\Draft;
use App\DesignPattern\Structural\Workflow\States\Published;
use App\DesignPattern\Structural\Workflow\States\Review;
use App\DesignPattern\Structural\Workflow\Transitions\ToPublished;
use App\DesignPattern\Structural\Workflow\Transitions\ToReview;
use PHPUnit\Framework\TestCase;

final class WorkflowTest extends TestCase
{

    public function testSuccessfulTransition():void
    {

        $facade = new WorkflowFacade(new Draft(),new SimpleAuthenticator(),new SimpleLogger());

        $facade->applyTransition(new ToReview());
        $this->assertInstanceOf(Review::class,$facade->getCurrentState());

        $facade->applyTransition(new ToPublished());
        $this->assertInstanceOf(Published::class,$facade->getCurrentState());
        
    }

    public function testSuccessfulTransitionWithLogDetection():void
    {
        $facade = new WorkflowFacade(new Draft(),new SimpleAuthenticator(),new SimpleLogger());


        ob_start();


        $facade->applyTransition(new ToReview());

        $output = ob_get_clean();
        //var_dump($output);


        $this->assertInstanceOf(Review::class,$facade->getCurrentState());
        $this->assertStringContainsString("Applying transition",$output);
        $this->assertStringContainsString("transition applied successfully",$output);
        
    }

    public function testExceptionWhenTransitionFromDraftToPublished():void
    {
        $inicialState = new Draft();
        $authenticator = new SimpleAuthenticator();
        $logger = new SimpleLogger();
        $facade = new WorkflowFacade($inicialState,$authenticator,$logger);

        $this->assertTrue($authenticator->authenticate(true));

        $this->expectExceptionMessage("invalid transition");

        $toPublished = new ToPublished();
        $facade->applyTransition($toPublished);
        
    }
}