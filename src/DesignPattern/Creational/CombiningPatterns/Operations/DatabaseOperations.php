<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Operations;

use App\DesignPattern\Creational\CombiningPatterns\Database\DatabaseConnection;
use App\DesignPattern\Creational\CombiningPatterns\Entity\EntityInterface;
use App\DesignPattern\Creational\CombiningPatterns\EntityHelper\SqlQueryBuilder;

class DatabaseOperations
{
    public  function __construct(private DatabaseConnection $connection)
    {
    }
    public function insert(EntityInterface $entity, string $tableName):bool
    {

        $attributes = $entity->getAttributes();
        $query = SqlQueryBuilder::buildInsertQuery($tableName, $attributes);

        $success = $this->connection->executeQuery($query);

        if (!$success) {
           throw new \Exception("Falha ao inserir no banco de dados");
        }

        return $success;

    }
}