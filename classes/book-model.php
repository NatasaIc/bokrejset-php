<?php

require_once 'db.php';

class BookModel extends DB{

    protected $table = "books";

    public function convertToBookClass (array $books) : array {
        $classbooks = [];
        foreach ($books as $element) {
            $user = new Book ($element["id"], $element["title"], $element["year"], $element["pages"]);
            array_push($classbooks, $book);
        }
        return $classbooks;
    }

    public function getAllBooks() :array {
        return $this->convertToBookClass($this->getAll($this->table));
    }

    public function getSingleBook(int $id) :array {
        $query = "SELECT * FROM $this->table WHERE id = ?";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$id]);
        return $this->convertToBookClass($stmt->fetchAll(PDO::FETCH_ASSOC));
    }
    public function addBook(string $title, int $year, int $pages, int $authorId) : void {
        $query = "INSERT INTO {$this->table} (`title`, `year`, `pages`, `author_id`) VALUES (?,?,?,?)";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute([$title, $year, $pages, $authorId]);
    }
}
