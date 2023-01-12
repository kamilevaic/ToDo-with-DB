<?php

namespace Kamil\Todo\Framework;

class DBConnections
{
    private static $instnace = null;
    private $conn;

    private $host = 'localhost:3306';
    private $user = 'root';
    private $password = '';
    private $name = 'todo_project';

    private function __construct()
    {
        $this->conn = new \PDO("mysql:host=$this->host; dbname=$this->name",
        $this->user,
        $this->password,
        [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],
        );
    }

    public static function getInstance()
    {
        if(!isset(self::$instnace)){
            self::$instnace = new DBConnections();
        }

        return self::$instnace;
    }

    public function getConnection()
    {
        return $this->conn;
    }

}