<?php

use App\DesignPattern\Structural\Adapter\ExternalAPIAdapter;
use App\DesignPattern\Structural\Adapter\ExternalTranslationAPI;
use App\DesignPattern\Structural\Adapter\GoogleTranslate;
use App\DesignPattern\Structural\Adapter\MicrosoftTranslate;
use App\DesignPattern\Structural\Adapter\TranslationService;
use App\DesignPattern\Structural\Adapter\TranslationServiceWithSetable;
use App\DesignPattern\Structural\Adapter\UniversalTranslatorAdapter;
use PHPUnit\Framework\TestCase;

final class UniversalTranslationAdapterTest extends TestCase
{


    public function testTranslateWithGoogle():void
    {
        $googleTranslate = new GoogleTranslate();
        $adapter = new UniversalTranslatorAdapter($googleTranslate);
        $service = new TranslationService($adapter);

        $result = $service->requestTranslation("Hello","French");

        $this->assertSame("Translated by Google: Hello to French", $result);
    }

    public function testTranslateWithExternalApi():void
    {
        $externalApiTranslate = new ExternalTranslationAPI();
        $adapter = new ExternalAPIAdapter($externalApiTranslate);
        $service = new TranslationService($adapter);

        $result = $service->requestTranslation("Hello","French");
        $this->assertSame("External: Hello to French", $result);
    }

    public function testTranslateWithMicrosoft():void
    {
        $microsoftTranslate = new MicrosoftTranslate();
        $adapter = new UniversalTranslatorAdapter($microsoftTranslate);
        $service = new TranslationService($adapter);

        $result = $service->requestTranslation("Hello","French");

        $this->assertSame("Translated by Microsoft: Hello to French", $result);
    }

    public function testSwitchTranslateServices():void
    {
        $googleTranslate = new GoogleTranslate();
        $microsoftTranslate = new MicrosoftTranslate();

        $service = new TranslationService(new UniversalTranslatorAdapter($googleTranslate));

        $result1 = $service->requestTranslation("Hello","French");

        $service = new TranslationService(new UniversalTranslatorAdapter($microsoftTranslate));
        $result2 = $service->requestTranslation("Hello","Spanish");

        $this->assertSame("Translated by Google: Hello to French", $result1);
        $this->assertSame("Translated by Microsoft: Hello to Spanish", $result2);

    }

    public function testSwitchTranslateServicesWithExternalApi():void
    {
        $externalApiTranslate = new ExternalTranslationAPI();
        $googleTranslate = new GoogleTranslate();

        $service = new TranslationServiceWithSetable(new ExternalAPIAdapter($externalApiTranslate));

        $result1 = $service->requestTranslation("Hello","French");
        $service->setTranslator(new UniversalTranslatorAdapter($googleTranslate));
        $result2 = $service->requestTranslation("Hello","Spanish");

        $this->assertSame("External: Hello to French", $result1);
        $this->assertStringContainsString("Translated by Google: Hello to Spanish", $result2);


    }
}