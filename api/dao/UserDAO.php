<?php

require_once '/api/utils/Database.php';

class UserDAO {
    private $connection;

    public function __construct(PDO $connection) {
        $this->connection = $connection;
    }

    public function getAllUsers() {
        $query = "SELECT * FROM users";
        $statement = $this->connection->prepare($query);
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->fetch(PDO::FETCH_ASSOC);
    }

    public function createUser($user) {
        $query = "INSERT INTO users (name, email, password) VALUES (:name, :email, :password)";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':name', $user['name']);
        $statement->bindParam(':email', $user['email']);
        $statement->bindParam(':password', $user['password']);
        $statement->execute();

        return $this->connection->lastInsertId();
    }

    public function updateUser($id, $user) {
        $query = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':name', $user['name']);
        $statement->bindParam(':email', $user['email']);
        $statement->bindParam(':password', $user['password']);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->rowCount();
    }

    public function deleteUser($id) {
        $query = "DELETE FROM users WHERE id = :id";
        $statement = $this->connection->prepare($query);
        $statement->bindParam(':id', $id);
        $statement->execute();

        return $statement->rowCount();
    }
}

?>
