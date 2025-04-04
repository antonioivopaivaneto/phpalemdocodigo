<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Factory;

use App\DesignPattern\Creational\CombiningPatterns\Operations\DatabaseOperations;
use App\DesignPattern\Creational\CombiningPatterns\Repository\RepositoryInterface;
use App\DesignPattern\Creational\CombiningPatterns\Repository\UserRespository;

class UserRepositoryFactory extends RepositoryFactory
{
    public function createRepository(DatabaseOperations $databaseOperations): RepositoryInterface
    {
       
        return new UserRespository($databaseOperations);
    }
}
