<?php

namespace App\Framework\Database;

class PDOFactory
{
    private int $port = 64658;
    private static string $user = "root";
    private static string $host = "db";
    private static string $dbname = "projet";
    private static string $password = "azerty";


    public static function getMysqlConnection(): \PDO
    {
        return new \PDO("mysql:host=".self::$host.";dbname=".self::$dbname, self::$user, self::$password);
    }
}