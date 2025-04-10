<?php

namespace App\DesignPattern\Structural\Bridge;

interface DatabaseDriver
{
public function query(string $sql): array;
   
}
