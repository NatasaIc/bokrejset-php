<?php

require '../classes/book-model.php';

$pdo = require_once '../partials/connect.php';

$bookModel = new BookModel($pdo);

if (isset($_POST['title'], $_POST['year'], $_POST['pages'], $_POST['author_id'])) {
    $title = filter_var($_POST['title'], FILTER_SANITIZE_SPECIAL_CHARS);
    $year = filter_var((int)$_POST['year'], FILTER_SANITIZE_NUMBER_INT);
    $pages= filter_var((int)$_POST['pages'], FILTER_SANITIZE_NUMBER_INT);
    $authorId = filter_var((int)$_POST['author_id'], FILTER_SANITIZE_NUMBER_INT);
    echo $authorId;
    $bookModel->addBook($title, $year, $pages, $authorId);
}

header("Location: ../books.php");
exit;
