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

    public function getById(int $id)
    {
        $query = "SELECT * FROM users WHERE id = " . $id;
        $result = $this->connection->query($query);
        $result->setFetchMode(\PDO::FETCH_INTO, new \stdClass);
        return $result;
    }

    public function post($id,$data){
        $sql = "UPDATE users SET " . 
            " name = '" . $data['name'] . "', " . 
            " email = '" . $data['email'] . "'" . 
            " WHERE id = " . $id;
        
        $dataUpdate = $this->connection->query( $sql );
        $dataUpdate->setFetchMode(\PDO::FETCH_INTO, new \stdClass);
        return $dataUpdate;
         
    }

    public function deleteById($id){
        $sql = "DELETE FROM users " .
            " WHERE id = " . $id;
        $dataUpdate = $this->connection->query( $sql );
        $dataUpdate->setFetchMode(\PDO::FETCH_INTO, new \stdClass);
        return true;
    }

    public function insert($data) {
        $data = 
           array( 'name' => htmlspecialchars($_GET["name"]),
                  'email' => htmlspecialchars($_GET["email"]),
           );
        $sql = "INSERT INTO users (id, name, email) VALUES ( NULL, " . 
           "'" . $data['name'] . "', " . 
           "'" . $data['email'] . "'" . 
           ")";
       $dataPut = $this->connection->query( $sql );
       $dataPut->setFetchMode(\PDO::FETCH_INTO, new \stdClass);
       return $dataPut;
    }
}