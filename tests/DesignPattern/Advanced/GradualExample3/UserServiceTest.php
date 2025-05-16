<?php

use App\DesignPattern\Advanced\GradualExample3\Configuration;
use App\DesignPattern\Advanced\GradualExample3\UserService;
use App\DesignPattern\Advanced\GradualExample3\Settings;
use App\DesignPattern\Advanced\GradualExample3\SettingsFactory;
use PHPUnit\Framework\TestCase;

final class UserServiceTest extends TestCase
{
    protected function setUp(): void
    {
        parent::setUp();
        SettingsFactory::init();
    }
    public function testPerformAction():void
    {
        $settings = SettingsFactory::createSettings('user');
        $config = Configuration::getInstance($settings);
        $userService = new UserService($config);

        $this->expectOutputString('Performing action based on setting: create_user');
        $userService->performAction();
        
    }
}