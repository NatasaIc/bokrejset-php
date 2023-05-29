<?php

require_once 'db.php';

class AuthorModel extends DB {

    protected $table = "authors";

    public function getAllAuthors(){
        return $this->getAll($this->table);
    }

    public function getSingleAuthor(int $id) {
        $sql = "SELECT * FROM $this->table WHERE id = ?";
        $statement = $this->pdo->prepare($sql);
        $statement->execute([$id]);
    }

    public function createAuthor($firstname, $lastname) {
    $sql = "INSERT INTO $this->table (`first_name`, `last_name`) VALUES(?,?)";
    $statement = $this->pdo->prepare($sql);
    $statement->execute([$firstname, $lastname]);
}
}
