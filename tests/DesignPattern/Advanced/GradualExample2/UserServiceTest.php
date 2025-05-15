<?php

use App\DesignPattern\Advanced\GradualExample2\Configuration;
use App\DesignPattern\Advanced\GradualExample2\UserService;
use App\DesignPattern\Advanced\GradualExample2\Settings;
use PHPUnit\Framework\TestCase;

final class UserServiceTest extends TestCase
{
    public function testPerformAction():void
    {
        $settings = new Settings('create_user');
        $config = Configuration::getInstance($settings);
        $userService = new UserService($config);

        $this->expectOutputString('Performing action based on setting: create_user');
        $userService->performAction();
        
    }
}