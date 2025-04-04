<?php

use App\DesignPattern\Creational\CombiningPatterns\Database\DatabaseConnection;
use App\DesignPattern\Creational\CombiningPatterns\Entity\UserEntity;
use App\DesignPattern\Creational\CombiningPatterns\Factory\UserRepositoryFactory;
use App\DesignPattern\Creational\CombiningPatterns\Operations\DatabaseOperations;
use App\DesignPattern\Creational\CombiningPatterns\Repository\UserRespository;
use PHPUnit\Framework\TestCase;

class CombiningPatternsTest extends TestCase
{
    public function testCanCreateDatabaseConnection()
    {
        $connection = DatabaseConnection::getInstance('mysql');
        $this->assertInstanceOf(DatabaseConnection::class, $connection);

    }

    public function testCanInsertUserEntity()
    {
        $connection = DatabaseConnection::getInstance('mysql');
        $databaseOperations = new DatabaseOperations($connection);

        $userEntity = new UserEntity(1, 'Junior paiva');
        $success = $databaseOperations->insert($userEntity, 'users');

        $this->assertTrue($success);
    }

    public function testCanCreateUserRepository()
    {
        $connection = DatabaseConnection::getInstance('mysql');
        $databaseOperations = new DatabaseOperations($connection);
        $repositoryFactory = new UserRepositoryFactory();

        $userRepository = $repositoryFactory->createRepository($databaseOperations);

        $this->assertInstanceOf(UserRespository::class, $userRepository);
       
    }

    public function testCanAddUserEntityRespository()
    {
        $connection = DatabaseConnection::getInstance('mysql');
        $databaseOperations = new DatabaseOperations($connection);
        $repositoryFactory = new UserRepositoryFactory();

        $userRepository = $repositoryFactory->createRepository($databaseOperations);


        $userEntity = new UserEntity(1, 'Junior paiva');
        $success = $userRepository->add($userEntity);

        $this->assertTrue($success);
    }

    public function testCanInsertUserWithOutputCapture()
    {
        ob_start();

        $connection = DatabaseConnection::getInstance('mysql');
        $databaseOperations = new DatabaseOperations($connection);
        $repositoryFactory = new UserRepositoryFactory();
        $userRepository = $repositoryFactory->createRepository($databaseOperations);
        $userEntity = new UserEntity(1, 'Junior paiva');
        $success = $userRepository->add($userEntity);

        $output = ob_get_clean();

        $this->assertTrue($success);

        $expectedSQL = "INSERT INTO users (id, name) VALUES (1, 'Junior paiva')";
        $this->assertStringContainsString($expectedSQL,$output);
    }
}