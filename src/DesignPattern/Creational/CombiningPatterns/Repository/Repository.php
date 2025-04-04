<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Repository;

use App\DesignPattern\Creational\CombiningPatterns\Entity\EntityInterface;
use App\DesignPattern\Creational\CombiningPatterns\Operations\DatabaseOperations;

abstract class Repository implements RepositoryInterface
{

    public function __construct(
        protected DatabaseOperations $databaseOperations,
        private string $tableName 
    ){}

    public function add(EntityInterface $entity): bool
    {
        return $this->databaseOperations->insert($entity, $this->tableName);
    }   

}