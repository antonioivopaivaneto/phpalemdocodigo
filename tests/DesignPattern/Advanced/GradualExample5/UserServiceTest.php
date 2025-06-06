<?php

use App\DesignPattern\Advanced\GradualExample5\ProductSettingsStrategy;
use App\DesignPattern\Advanced\GradualExample5\UserSettingsStrategy;
use App\DesignPattern\Advanced\GradualExample5\Configuration;
use App\DesignPattern\Advanced\GradualExample5\UserService;
use App\DesignPattern\Advanced\GradualExample5\Settings;
use App\DesignPattern\Advanced\GradualExample5\SettingsFactory;
use App\DesignPattern\Advanced\GradualExample5\SettingsStrategyRegistry;
use PHPUnit\Framework\TestCase;

final class UserServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        SettingsStrategyRegistry::registerStrategy('user',new UserSettingsStrategy());
        SettingsStrategyRegistry::registerStrategy('product',new ProductSettingsStrategy());
    }
    public function testPerformActionwithUserSettings():void
    {
        $settings = SettingsFactory::createSettings('user');
        $config = Configuration::getInstance($settings);
        $userService = new UserService($config);

        $this->expectOutputString('Performing action based on setting: create_user');
        $userService->performAction();
        
    }
    public function testPerformActionwithProductSettings():void
    {
        $settings = SettingsFactory::createSettings('product');
        $config = Configuration::getInstance($settings);
        $userService = new UserService($config);

        $this->expectOutputString('Performing action based on setting: create_product');
        $userService->performAction();
        
    }

    protected function tearDown(): void
    {
        Configuration::resetInstance();
        parent::tearDown();
    }
}