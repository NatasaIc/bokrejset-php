<?php

require 'classes/book-view.php';
require 'classes/book-model.php';
require 'classes/book.php';

$pdo = require 'partials/connect.php';
$bookModel = new BookModel($pdo);
$bookView = new BookView();

// ==============================================

include 'partials/header.php';
include 'partials/nav.php';

// $bookView->renderAllBooksAsList($bookModel->getAllBooks());
$bookView->renderAllBooksAsLinks($bookModel->getAllBooks());

include 'partials/book-form.php';

include 'partials/footer.php';
