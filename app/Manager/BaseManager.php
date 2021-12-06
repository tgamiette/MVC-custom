<?php

namespace App\Manager;

class BaseManager
{
    private $PDO;

    public function __construct($pdo)
    {
        $this->PDO = $pdo;
    }
}