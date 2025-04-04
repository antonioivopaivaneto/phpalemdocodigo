<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Repository;

use App\DesignPattern\Creational\CombiningPatterns\Operations\DatabaseOperations;

class UserRespository extends Repository
{
    public function __construct(DatabaseOperations $databaseOperations)
    {
        parent::__construct($databaseOperations, 'users');
    }
   
}