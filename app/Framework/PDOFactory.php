<?php

namespace App\Framework;

class PDOFactory
{
    private \PDO $PDO;
    private int $port = 64658;
    private string $user = "root";
    private string $host = "db";
    private string $dbname = "projet";
    private string $password = "root";

    public function __construct()
    {
        try {
            $this->PDO = new \PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->user, $this->password);
        } catch (\Exception $th) {
            die("error :".$th->getMessage());
        }
    }

    public function getMysqlConnection(): \PDO
    {
        return $this->PDO;
    }
}