<?php

namespace App\Model;

class UsersModel {

    private $databaseFile;
    private $connection;

    function setConnection($conn)
    {
        return $this->connection = $conn;
    }

    public function getAllUsers()
    {
        $query = "SELECT * FROM users";
        $result = $this->connection->query($query);
        $result->setFetchMode(\PDO::FETCH_INTO, new \stdClass);
        return $result;
    }
}