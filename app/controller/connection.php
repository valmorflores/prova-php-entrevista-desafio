<?php

namespace App\Controller;

class Connection {

    private $databaseFile;
    private $connection;

    public function __construct()
    {
        $path = __DIR__ . "/../../database/db.sqlite";
        $this->databaseFile = realpath($path);
        $this->connect();
    }

    private function connect()
    {
        return $this->connection = new \PDO("sqlite:{$this->databaseFile}");
    }

    public function getConnection()
    {
        return $this->connection ?: $this->connection = $this->connect();
    }

    public function query($query)
    {
        $result      = $this->getConnection()->query($query);

        $result->setFetchMode(\PDO::FETCH_INTO, new \stdClass);

        return $result;
    }
}