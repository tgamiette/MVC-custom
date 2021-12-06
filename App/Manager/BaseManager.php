<?php

namespace App\Manager;
use App\Framework\PDOFactory;

class BaseManager
{
    protected \PDO $db;

    public function __construct()
    {
        $this->db = PDOFactory::getMysqlConnection();
    }
}