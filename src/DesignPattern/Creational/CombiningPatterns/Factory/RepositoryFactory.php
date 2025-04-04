<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Factory;

use App\DesignPattern\Creational\CombiningPatterns\Operations\DatabaseOperations;
use App\DesignPattern\Creational\CombiningPatterns\Repository\RepositoryInterface;

abstract class RepositoryFactory
{
    abstract public function createRepository(
        DatabaseOperations $databaseOperations
    ):RepositoryInterface;
}
