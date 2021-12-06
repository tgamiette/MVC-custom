<?php

namespace App\Manager;

class BaseManager
{
    private \PDO $PDO;

    public function __construct($pdo)
    {
        $this->PDO = $pdo;
    }
}