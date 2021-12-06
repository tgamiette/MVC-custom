<?php

namespace App\Manager;

use App\Framework\PDOFactory;

abstract class BaseManager
{
    public \PDO $dbo;

    public function __construct()
    {
        $this->dbo = PDOFactory::getMysqlConnection();
    }
}