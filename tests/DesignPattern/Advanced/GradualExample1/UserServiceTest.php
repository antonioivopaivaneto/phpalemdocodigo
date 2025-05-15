<?php

use App\DesignPattern\Advanced\GradualExample1\Configuration;
use App\DesignPattern\Advanced\GradualExample1\UserService;
use PHPUnit\Framework\TestCase;

final class UserServiceTest extends TestCase
{
    public function testPerformAction():void
    {
        $config = Configuration::getInstance(['action' => 'create_user']);
        $userService = new UserService($config);

        $this->expectOutputString('Performing action based on setting: create_user');
        $userService->performAction();
        
    }
}