<?php

namespace App\Manager;

class BaseManager
{
    private \PDO $db;

    public function __construct(\PDO $pdo)
    {
        $this->db = $pdo;
    }
}