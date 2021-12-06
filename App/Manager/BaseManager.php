<?php

namespace App\Manager;
use App\Framework\PDOFactory;

class BaseManager
{
    protected \PDO $db;

    public function __construct(\PDO $pdo)
    {
        $this->db = PDOFactory::getMysqlConnection();
    }
}