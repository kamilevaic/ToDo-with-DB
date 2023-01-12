<?php
namespace Kamil\Todo\Repository;

use Kamil\Todo\Framework\DBConnections;

class TaskRepository
{
    private function db(){
        $instance = DBConnections::getInstance();
        return  $instance->getConnection();
    }

    public function getAllTasks(){
        $conn = $this->db();
        $statement = $conn->prepare('SELECT * FROM task ');
        $statement->execute();

        return  $statement->fetchAll(\PDO::FETCH_ASSOC);

    }
}

