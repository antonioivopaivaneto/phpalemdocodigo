<?php

namespace App\DesignPattern\Creational\CombiningPatterns\Repository;

use App\DesignPattern\Creational\CombiningPatterns\Entity\EntityInterface;

interface RepositoryInterface
{
    public function add(EntityInterface $entity): bool;
}